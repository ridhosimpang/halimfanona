<?php

namespace App\Http\Controllers;

use App\penjualan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\penjualanExport;
class DatapenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = penjualan::get();
        return view('datapenjualan', ['penjualan' => $penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = new penjualan;
        return view('/tambahpenjualan',compact('penjualan'));
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
            'nama_perumahan' => 'required', 
            'blok' => 'required',
            'no' => 'required|numeric',
            'nama' => 'required',
            'status' => 'required',
            'tglakad' => 'required'
            
        ];
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong',
            'numeric' =>'Data yang dimasukan harus angka'
        ];

        $requestData = $request->all();
        $this->validate($request,$rules,$costumMessages);

        penjualan::create($requestData);

        return redirect('/datapenjualan')->with('status', 'Data Penjualan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(penjualan $penjualan)
    {
        return view('datapenjualan', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        return view('ubahpenjualan', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {
        $request->validate([
            'nama_perumahan' => 'required',
            'blok' => 'required',
            'no' => 'required|numeric',
            'nama' => 'required',
            'tglakad' => 'required',
            'status' => 'required'
        ]);
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong',
            'numeric' =>'Data yang dimasukan harus angka'
        ];
        penjualan::where('id', $penjualan->id)
            ->update([
                'nama_perumahan' => $request->nama,
                'blok' => $request->blok,
                'no' => $request->no,
                'nama' => $request->nama,
                'tglakad' => $request->tglakad,
                'status' => $request->status
            ]);
            return redirect('/datapenjualan')->with('status', 'Data Penjualan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        penjualan::destroy($penjualan->id);
        return redirect('/datapenjualan')->with('status', 'Data penjualan Berhasil Dihapus');
    }
    public function exportPenjualan (Request $request){
        // dd($request);
        $penjualan = penjualan::all();
        return Excel::download(new penjualanExport ($penjualan), 'Penjualan.xlsx');
    }
}
