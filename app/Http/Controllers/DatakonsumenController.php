<?php

namespace App\Http\Controllers;

use App\konsumen;

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
        $konsumen = konsumen::get();
        // dd($konsumen);
        return view('datakonsumen', ['konsumen' => $konsumen]);
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
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:16',
            'tmptlhr' => 'required',
            'tgllhr' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'status_perkawinan' => 'required',
            'agama' => 'required',
            'namaperumahan' => 'required',
            'blok' => 'required',
            'no' => 'required|numeric',
            'nohp' => 'required|numeric'
        ]);
            $costumMessages = [
            'required' =>':attribute tidak boleh kosong',
            'numeric' =>'Data yang dimasukan harus angka',
            'size' => 'Jumlah NIK Harus 16 Angka'
        ];
        konsumen::where('id', $konsumen->id)
            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'tmptlhr' => $request->tmptlhr,
                'tgllhr' => $request->tgllhr,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'status_perkawinan' => $request->status_perkawinan,
                'agama' => $request->agama,
                'namaperumahan' => $request->namaperumahan,
                'blok' => $request->blok,
                'no' => $request->no,
                'nohp' => $request->nohp
                ]);
            return redirect('/detailkonsumen'.'/'.$konsumen->id)->with('status', 'Data Perumahan Berhasil Diubah');
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
        return redirect('/datakonsumen')->with('status', 'Data konsumen Berhasil Dihapus');
    }
}
