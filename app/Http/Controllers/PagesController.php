<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //

    public function kota($wilayah){
    	if($wilayah == 1)
    	{
            $data = Sekolah::all()->where('wilayah','Jakarta');
            $lokasi = 'Jakarta';
            //dd($data);
    		// return view('kota.kota', $data);
            return view('kota.kota')->with('data',$data)->with('lokasi', $lokasi);
    	}
    	elseif($wilayah == 2) {
    		$data = Sekolah::all()->where('wilayah','Bandung');
            //dd($data);
            $lokasi = 'Bandung';
    	    return view('kota.kota')->with('data',$data)->with('lokasi', $lokasi);	
    		# code...
    	}
    	elseif($wilayah == 3) {
    		$data = Sekolah::all()->where('wilayah','Surabaya');
            // dd($data);
            $lokasi = 'Surabaya';
    		return view('kota.kota')->with('data',$data)->with('lokasi', $lokasi);
    		# code...
    	}
    }

}
