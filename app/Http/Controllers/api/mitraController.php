<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tb_mitra;
use Illuminate\Http\Request;

class mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=tb_mitra::all();
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
        $tambah=tb_mitra::create([
            'prov_id' => $request->prov_id,
            'city_id'=>$request->city_id,
            'distrik_id'=>$request->distrik_id,
            'sub_distrik_id'=>$request->sub_distrik_id,
            'nama'=>$request->nama,
            'telpon'=>$request->telpon,
            'status'=>$request->status,
            'kapasitas'=>$request->kapasitas,
        ]);

        return response()->json(['message'=>'Berhasil Ditambah',200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_mitra  $tb_mitra
     * @return \Illuminate\Http\Response
     */
    public function show(tb_mitra $tb_mitra,$id)
    {
        //
        $data=tb_mitra::find($id);
        return response()->json(['messsage'=>'Data ditemukan','result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_mitra  $tb_mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_mitra $tb_mitra,$id)
    {
        //
        $data=tb_mitra::find($id);
        $data->mitra_id='2';
        $data->save();
        return response()->json(['message'=>'Data berhasil diubah',200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_mitra  $tb_mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_mitra $tb_mitra, $id)
    {
        $data=tb_mitra::find($id);
        $data->delete();
        return response()->json(['message'=>'Data berhasil dihapus',200]);
        //
    }
}
