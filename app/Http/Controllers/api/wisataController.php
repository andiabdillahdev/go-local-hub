<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_wisata;
use App\Models\tb_mitra;
use Illuminate\Http\Request;

class wisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=tb_wisata::all();
     
        return response()->json(['result'=>$data]);
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
        $add=tb_wisata::create([
            'prov_id' => $request->prov_id,
            'city_id'=>$request->city_id,
            'distrik_id'=>$request->distrik_id,
            'sub_distrik_id'=>$request->sub_distrik_id,
            'mitra_id'=>$request->mitra_id,
            'nama'=>$request->nama,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'thumbnail'=>$request->thumbnail,
            'telpon'=>$request->telpon,
            'status'=>$request->status,
            'kapasitas'=>$request->kapasitas,
        ]);
        return response()->json(['message'=>'Data berhasil ditambah',200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_wisata  $tb_wisata
     * @return \Illuminate\Http\Response
     */
    public function show(tb_wisata $tb_wisata,$id)
    {
        //
        $data=tb_wisata::find($id);
    //    $tampil= $data->relasi_tb_wisata();
        return response()->json(['result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_wisata  $tb_wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_wisata $tb_wisata,$id)
    {
        //
        $data=tb_wisata::find($id);
        $data->mitra_id=3;
        $data->save()
;        return response()->json(['message'=>'data berhasil diubah',200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_wisata  $tb_wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_wisata $tb_wisata,$id)
    {
        //
        $data=tb_wisata::find($id);
        $data->delete();
        return response()->json(['message'=>'Brhasil dihapus']);
    }
}
