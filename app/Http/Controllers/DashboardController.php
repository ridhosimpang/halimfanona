<?php

namespace App\Http\Controllers;
use App\perumahan;
use App\pengajuan;
use App\unit;
use App\User;
use App\penjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataPerumahan= perumahan::all();
        $dataPengajuan = pengajuan::count();
        $dataPenjualan = penjualan::count();
        $belumTerjual = unit::where('konsumen_id',null)->count();
        // dd($belumTerjual);
        return view('admin',compact('dataPerumahan','dataPengajuan','dataPenjualan','belumTerjual'));
    }
    public function setting(){
        return view ('setting');
    }
    public function gantiFoto(User $id, Request $request){
        $requestData=$request->all();
        if ($request->hasFile('foto')) {
            $file_nama            = $request->file('foto')->store('public/user/foto');
            $requestData['foto'] = $file_nama;
        } else {
            unset($requestData['foto']);
        }
        // dd($request);
        $id->update($requestData);
        return redirect()->back()->with('status','Foto berhasil diganti');
    }
}
