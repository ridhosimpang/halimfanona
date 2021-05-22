<?php

namespace App\Http\Controllers;

use App\pengajuan;
use App\penjualan;

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
        $pengajuan = penjualan::all();
        return view('datapengajuan', ['pengajuan' => $pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pengajuan = new pengajuan;
        // return view('/tambahpengajuan',compact('pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules =[ 
        //     'nama_perumahan' => 'required', 
        //     'blok' => 'required',
        //     'no' => 'required|numeric',
        //     'nama' => 'required',
        //     'statusBerkas' => 'required'
            
        // ];
        // $costumMessages = [
        //     'required' =>':attribute tidak boleh kosong',
        //     'numeric' =>'Data yang dimasukan harus angka'
        // ];

        // $requestData = $request->all();
        // $this->validate($request,$rules,$costumMessages);

        // pengajuan::create($requestData);

        // return redirect('/datapengajuan')->with('status', 'Data Pengajuan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $penjualan=penjualan::find($request->id)->update($requestData);
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
}
