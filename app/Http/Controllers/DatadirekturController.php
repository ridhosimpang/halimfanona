<?php

namespace App\Http\Controllers;

use App\direktur;
use App\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatadirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $direktur = DB::table('konsumen')->get();
        // return view('datakonsumen', ['konsumen' => $konsumen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function kelolaadmin()
    {
        $admin = user::where('role','admin')->get();
        return view('/kelolaadmin',compact('admin'));
    }
    public function tambahadmin(Request $request)       
    {
        return view ('/tambahadmin');
    }
    public function simpanadmin(Request $request)   
    {
        $user = new user();
        $user ['name'] = $request->name;
        $user ['email'] = $request->email;
        $user ['password'] = bcrypt($request->password);
        $user ['role'] = "admin";
        $user->save();
        return redirect('/editadmin')->with('status','Admin Berhasil Ditambahkan');
    }
    public function hapusadmin($request)       
    {
        user::destroy($request);
        return redirect('/editadmin')->with('status', 'Data konsumen Berhasil Dihapus');
    }


}
