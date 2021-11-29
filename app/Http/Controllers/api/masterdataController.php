<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Resources\master_data;

class masterdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=tb_kategori::all();
        return response()->json(['message'=>'berhasil','result'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=tb_kategori::create(
            [

                'nama'=>$request->nama,
                'status'=>$request->status,
                'image'=>$request->image,
                'slug'=>str::slug($request->nama,'-'),
            ]
        );

        return response()->json(['pesan'=>'berhasil diteambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_kategori  $tb_kategori
     * @return \Illuminate\Http\Response
     */
    public function show(tb_kategori $tb_kategori,$id)
    {
        //
        $data=tb_kategori::find($id);
        return response()->json(['pesan'=>'berhasil ditampilkan','result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_kategori  $tb_kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_kategori $tb_kategori, $id)
    {
        //
        $data=tb_kategori::find($id);
        $data->nama=$request->nama;
        $data->save();

        return response()->json(['pesan'=>'berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_kategori  $tb_kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_kategori $tb_kategori, $id)
    {
        //
        $data=tb_kategori::find($id);
        $data->delete();
        return response()->json(['pesan'=>'berhasil dihapus',200]);
    }
}
