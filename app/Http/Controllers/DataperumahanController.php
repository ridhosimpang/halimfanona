<?php

namespace App\Http\Controllers;

use App\perumahan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataperumahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perumahan = DB::table('perumahan')->get();
        return view('dataperumahan', ['perumahan' => $perumahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perumahan = new perumahan;
        return view('/tambahperumahan',compact('perumahan'));
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
            'tiperumah' => 'required',
            'luasrumah' => 'required',
            'totalunit' => 'required',
            'luaslahan' => 'required'
            // 'foto' => 'required'
            
        ];
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong'
        ];

        $requestData = $request->all();
        $this->validate($request,$rules,$costumMessages);

        perumahan::create($requestData);

        return redirect('/dataperumahan')->with('status', 'Data Perumahan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(perumahan $perum)
    {
        return view('dataperumahan', compact('perum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Dataperumahan $perum
     * @return \Illuminate\Http\Response
     */
    public function edit(perumahan $perum)
    {
        return view('ubahperumahan', compact('perum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perumahan $perum)
    {
        $request->validate([
            'nama' => 'required',
            'tiperumah' => 'required',
            'luasrumah' => 'required',
            'totalunit' => 'required',
            'luaslahan' => 'required'
            // 'foto' => 'required'
            ]);
        $costumMessages = [
            'required' =>':attribute tidak boleh kosong'
        ];
        perumahan::where('id', $perum->id)
            ->update([
                'nama' => $request->nama,
                'tiperumah' => $request->tiperumah,
                'luasrumah' => $request->luasrumah,
                'totalunit' => $request->totalunit,
                'luaslahan' => $request->luaslahan,
                'foto' => $request->foto
            ]);
            return redirect('/dataperumahan')->with('status', 'Data Perumahan Berhasil Diubah');

        
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(perumahan $perum)
    {
        perumahan::destroy($perum->id);
        return redirect('/dataperumahan')->with('status', 'Data Perumahan Berhasil Dihapus');

    }
}
