<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_transportasi;
use Illuminate\Http\Request;

class transportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=tb_transportasi::all();
        return response()->json(['result'=>$data,200]);
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
        $data=tb_transportasi::create([
            'nama'=>$request->nama,
            'nomor'=>$request->nomor,
            'type'=>$request->type,
            'id_kategori_transportasi'=>3
        ]);
        return response()->json(['message'=>'berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_transportasi  $tb_transportasi
     * @return \Illuminate\Http\Response
     */
    public function show(tb_transportasi $tb_transportasi,$id)
    {
        //
        $data=tb_transportasi::find($id);
        return response()->json(['result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_transportasi  $tb_transportasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_transportasi $tb_transportasi,$id)
    {
        //
        $data=tb_transportasi::find($id);
        $data->nama=$request->nama;
        $data->nomor=$request->nomor;
        $data->type=$request->type;
        $data->save();
        return response()->json(['message'=>'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_transportasi  $tb_transportasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_transportasi $tb_transportasi,$id)
    {
        //
        $data=tb_transportasi::find($id);
        $data->delete();
        return response()->json(['message'=>'Berhasil Dihapus']);

    }
}
