<?php

namespace App\Http\Controllers;

use App\pengajuan;
use App\perumahan;
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
        // dd($request);
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

        $requestData = $request->all();
        $this->validate($request,$rules,$costumMessages);
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
    public function update(Request $request, $id)
    {
        // $penjualan = penjualan::find($request->id);
        $requestData ['statusBerkas']= $request->statusBerkas;
        $pengajuan=pengajuan::find($request->id)->update($requestData);
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
                                                    ->where('perumahan_id',$id)->get();

    		return response()->json($data);
    	}
    }
}
