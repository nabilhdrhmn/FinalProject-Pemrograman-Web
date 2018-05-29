<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $data['school'] = Sekolah::all();

        return view('dashboard', $data);

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
    public function tambah(Request $request)
    {
        $sekolah= new Sekolah();

        $sekolah->nama_sekolah = $request->nama_sekolah;

        $sekolah->alamat = $request->alamat;

        $sekolah->wilayah = $request->wilayah;

        $sekolah->website = $request->website;

        $sekolah->deskripsi = $request->deskripsi;

        $file = $request['image'];
        $fileName = $request['image']->getClientOriginalName();
        $destination = public_path('/image');
        $file->move($destination, $fileName);

        $sekolah->image = $file;

        $sekolah->save();

        return redirect()->back();
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
        $data = Sekolah::find($id);
        return view('admins.edit',['data' => $data]);

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
        //echo $id;
        $data = array(
            'nama_sekolah' => $request->input('nama_sekolah'),
            'alamat' => $request->input('alamat'),
            'wilayah' => $request->input('wilayah'),
            'deskripsi' => $request->input('deskripsi'),
            'website' => $request->input('website')
        );

        
        //dd($data);
        Sekolah::find($id)->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $sekolah = Sekolah::find($id);
         $sekolah->delete();

        //return view('dashboard');
         return redirect()->back();
    }
}
