<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function kota($berak){
    	if($berak == 1)
    	{
    		$data = 'Jakarta';
    		return view('kota.kota',['data' => $data]);
    	}
    	elseif($berak == 2) {
    		$data = 'Bandung';
    	    return view('kota.kota',['data' => $data]);	
    		# code...
    	}
    	elseif($berak == 3) {
    		$data = 'Surabaya';
    		return view('kota.kota',['data' => $data]);
    		# code...
    	}
    }

}
