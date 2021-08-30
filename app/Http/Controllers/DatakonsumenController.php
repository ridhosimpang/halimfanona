<?php

namespace App\Http\Controllers;

use App\konsumen;
use App\penjualan;
use App\unit;
use App\perumahan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatakonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perumahan = perumahan::all();
        // dd($konsumen);
        return view('datakonsumen', ['perumahan' => $perumahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $konsumen = new konsumen;
        return view('/tambahkonsumen',compact('konsumen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[ 
            'nama' => 'required', 
            'nik' => 'required|size:16', 
            'tmptlhr' => 'required',
            'alamat' => 'required',
            'namaperumahan' => 'required',
            'blok' => 'required',
            'no' => 'required|numeric',
            'nohp' => 'required|numeric'
            
        ];
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong',
            'numeric' =>'Data yang dimasukan harus angka',
            'size' => 'Jumlah NIK Harus 16 Angka'
        ]; 
        // $requestData ['foto'] = $request->file('foto')->store('public/gambar');

        $requestData = $request->all();
        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('public/konsumen/foto');
            $requestData['foto']=$foto;
        }else{
            unset($requestData['foto']);
        }
        $this->validate($request,$rules,$costumMessages);
        // dd($requestData);ate
        konsumen::create($requestData);

        return redirect('/datakonsumen')->with('status', 'Data Konsumen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(konsumen $konsumen)
    {
        return view('detailkonsumen', compact('konsumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(konsumen $konsumen)
    {
        return view('/ubahkonsumen', compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, konsumen $konsumen)
    {
        // dd($request);
        // $request->validate([
        //     'nama_konsumen' => 'required',
        //     'nik' => 'required|size:16',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'alamat' => 'required',
        //     'jk' => 'required',
        //     'status_perkawinan' => 'required',
        //     'agama' => 'required',
        //     'perumahan_id' => 'required',
        //     'unit_id' => 'required',
        //     'nohp' => 'required|numeric'
        // ]);
        // $costumMessages = [
        //     'required' =>':attribute tidak boleh kosong',
        //     'numeric' =>'Data yang dimasukan harus angka',
        //     'size' => 'Jumlah NIK Harus 16 Angka'
        // ];
        // $this->validate($request,$rules,$costumMessages);
        $requestData=$request->all();
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
        konsumen::find($konsumen->id)->update($requestData);
        $refreshUnit = unit::where('konsumen_id',$konsumen->id)->update(['konsumen_id'=>null,'pengajuan'=>null]);
        $updateUnit = unit::find($request->unit_id)->update(['konsumen_id'=>$konsumen->id,'pengajuan'=>$konsumen->nama_konsumen]);
        $cariPenjualan = penjualan::where('konsumen_id',$konsumen->id)->first();
        $cariPenjualan->update(['perumahan_id'=>$request->perumahan_id,'unit_id'=>$request->unit_id]);
        return redirect('/detailkonsumen'.'/'.$konsumen->id)->with('status', 'Data Konsumen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(konsumen $konsumen)
    {
        konsumen::destroy($konsumen->id);
        $updatePenjualan = penjualan::where('konsumen_id',$konsumen->id)->first();
        $updatePenjualan->delete();
        $updateUnit = unit::where('konsumen_id',$konsumen->id)->update(['konsumen_id'=>null,'pengajuan'=>null]);
        return redirect('/datakonsumen')->with('status', 'Data konsumen Berhasil Dihapus');
    }
    public function konsumenPerumahan(perumahan $id){
        $konsumen=konsumen::where('perumahan_id',$id->id)->get();

        return view('konsumenPerumahan',compact('id','konsumen'));
    }
}
