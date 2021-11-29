<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class sub_kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=tb_subkategori::all();
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
        $data=tb_subkategori::create([
            'id_kategori'=>$request->id_kategori,
            'nama'=>$request->nama,
            'image'=>$request->image,
            'prefix'=>$request->prefix,
            'status'=>$request->status,
            'slug'=>Str::slug($request->nama,'-')
        ]);
        return response()->json(['message'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_subkategori  $tb_subkategori
     * @return \Illuminate\Http\Response
     */
    public function show(tb_subkategori $tb_subkategori,$id)
    {
        //
        $data=tb_subkategori::find($id);
        return response()->json(['result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_subkategori  $tb_subkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_subkategori $tb_subkategori,$id)
    {
        //
        $data=tb_subkategori::find($id);
        $data->nama='Data Berhasil diubah';
        $data->save();
        return response()->json(['message'=>'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_subkategori  $tb_subkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_subkategori $tb_subkategori,$id)
    {
        //
        $data=tb_subkategori::find($id);
        $data->delete();
        return response()->json(['message'=>'Data berhasil diubah']);

    }
}
