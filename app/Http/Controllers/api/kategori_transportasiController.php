<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_kategori_transportasi;
use Illuminate\Http\Request;

class kategori_transportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data=tb_kategori_transportasi::all();
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
        $data=tb_kategori_transportasi::create([
            'nama'=>$request->nama,
            'status'=>$request->status,
            'prov_id'=>1,
            'city_id'=>1,
            'distrik_id'=>1,
            'sub_distrik_id'=>1
        ]);
        return response()->json(['message'=>'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_kategori_transportasi  $tb_kategori_transportasi
     * @return \Illuminate\Http\Response
     */
    public function show(tb_kategori_transportasi $tb_kategori_transportasi,$id)
    {
        //
        $data=tb_kategori_transportasi::find($id);
    
        return response()->json(['result'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_kategori_transportasi  $tb_kategori_transportasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_kategori_transportasi $tb_kategori_transportasi,$id)
    {
        //
        $data=tb_kategori_transportasi::find($id);
        $data->nama=$request->nama;
        $data->status=$request->status;
        $data->save();
        return response()->json(['message'=>'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_kategori_transportasi  $tb_kategori_transportasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_kategori_transportasi $tb_kategori_transportasi,$id)
    {
        //
        $data=tb_kategori_transportasi::find($id);
        $data->delete();
        return response()->json(['message'=>'Data Berhasil Dihapus']);
    }
}
