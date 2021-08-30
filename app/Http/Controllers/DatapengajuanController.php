<?php

namespace App\Http\Controllers;

use App\pengajuan;
use App\konsumen;
use App\perumahan;
use App\penjualan;
use App\unit;
// use App\penjualan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatapengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = pengajuan::all();
        // dd($pengajuan);
        return view('datapengajuan', ['pengajuan' => $pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPengajuan()
    {
        // return "Pengajuan";
        $pengajuan = new pengajuan;
        return view('/tambahpengajuan',compact('pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $rules =[ 
            'nama_konsumen' => 'required', 
            'nik' => 'required|size:16', 
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'no_hp' => 'required|numeric'
            
        ];
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong',
            'numeric' =>'Data yang dimasukan harus angka',
            'size' => 'Jumlah NIK Harus 16 Angka'
        ]; 
        // $requestData ['foto'] = $request->file('foto')->store('public/gambar');

        $this->validate($request,$rules,$costumMessages);
        $requestData = $request->all();
        if ($request->hasFile('foto')) {
            $fileFoto            = $request->file('foto')->store('public/konsumen');
            $requestData['foto'] = $fileFoto;
        } else {
            unset($requestData['foto']);
        }
        if ($request->hasFile('fotoktp')) {
            $filefotoktp            = $request->file('fotoktp')->store('public/konsumen');
            $requestData['fotoktp'] = $filefotoktp;
        } else {
            unset($requestData['foto']);
        }
        if ($request->hasFile('fotokk')) {
            $filefotokk            = $request->file('fotokk')->store('public/konsumen');
            $requestData['fotokk'] = $filefotokk;
        } else {
            unset($requestData['fotokk']);
        }
        if ($request->hasFile('fotonpwp')) {
            $filefotonpwp            = $request->file('fotonpwp')->store('public/konsumen');
            $requestData['fotonpwp'] = $filefotonpwp;
        } else {
            unset($requestData['fotonpwp']);
        }
        if ($request->hasFile('fotobukunikah')) {
            $filefotobukunikah            = $request->file('fotobukunikah')->store('public/konsumen');
            $requestData['fotobukunikah'] = $filefotobukunikah;
        } else {
            unset($requestData['fotobukunikah']);
        }
        // dd($requestData);
        pengajuan::create($requestData);

        $updateUnit = unit::find($request->unit_id)->update(['pengajuan'=>$request->nama_konsumen]);

        return redirect('/datapengajuan')->with('status', 'Data konsumen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pengajuan $pengajuan)
    {
        return view('datapengajuan', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajuan $pengajuan)
    {
        // return view('', compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pengajuan $id)
    {
        $requestData=$request->all();
        $requestData ['status_berkas']= $request->statusBerkas;
        if($request->has('jadwalAkad')){
            $requestData ['jadwalAkad']= $request->jadwalAkad;
        }else{
            $requestData['jadwalAkad']=null;
        }
        // dd($requestData);
        $id->update($requestData);
        return redirect('/datapengajuan')->with('status', 'Data Pengajuan Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengajuan $pengajuan)
    {
        pengajuan::destroy($pengajuan->id);
        return redirect('/datapengajuan')->with('status', 'Data Pengajuan Berhasil Dihapus');
    }
    public function cariPerumahan(Request $request){
        if ($request->has('q')) {
    	    $cari = $request->q;
    		$data = perumahan::select('id', 'nama')->where('nama', 'LIKE', '%'.$cari.'%')->get();

    		return response()->json($data);
    	}
    }
    public function cariBlok(Request $request){
        // dd($request);
        if ($request->has('q')) {
    	    $cari = $request->q;
            $id = $request->id;
    		$data = unit::select('id', 'blok')->where('blok', 'LIKE', '%'.$cari.'%')
                                                    ->where('perumahan_id',$id)
                                                    ->where('konsumen_id',null)
                                                    ->get();

    		return response()->json($data);
    	}
    }
    public function transfer(Request $request, Pengajuan $id){
        // dd($id->toArray());
        // dd($id);
        $requestData = $id->toArray();
        konsumen::create($requestData);
        $cekKonsumen = konsumen::where('nik',$id->nik)->first();
        $requestPenjualan = [];
        $requestPenjualan['perumahan_id']=$id->perumahan_id; 
        $requestPenjualan['unit_id']=$id->unit_id; 
        $requestPenjualan['konsumen_id']=$cekKonsumen->id; 
        $requestPenjualan['tglakad']=$id->jadwalAkad; 
        $requestPenjualan['status']="Terjual";
        // dd($requestData);
        penjualan::create($requestPenjualan); 
        $updateUnit = unit::find($id->unit_id)->update(['konsumen_id'=>$cekKonsumen->id]);
        $id->delete();
        return redirect()->route('pengajuan')->with('status','Data Pengajuan berhasil diterima');
    }
}
