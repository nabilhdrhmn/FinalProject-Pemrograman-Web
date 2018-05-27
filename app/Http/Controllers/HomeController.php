<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_index');
    }

    public function tambah_sekolah()
    {
        return view('admin_tambahdata');   
    }

    public function ganti_pass()
    {
        return view('admin_ubahpassword');   
    }


}
