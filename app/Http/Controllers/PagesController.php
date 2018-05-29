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
            //dd($data);
    		// return view('kota.kota', $data);
            return view('kota.kota', ['data' => $data]);
    	}
    	elseif($berak == 2) {
    		$data = Sekolah::all()->where('wilayah','Bandung');
    	    return view('kota.kota', $data);	
    		# code...
    	}
    	elseif($berak == 3) {
    		$data = Sekolah::all()->where('wilayah','Surabaya');
    		return view('kota.kota', $data);
    		# code...
    	}
    }

}
