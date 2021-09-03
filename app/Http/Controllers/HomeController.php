<?php

namespace App\Http\Controllers;
use App\perumahan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perumahan = perumahan::all();
        // dd($perumahan);
        return view('home',compact('perumahan'));
    }
}
