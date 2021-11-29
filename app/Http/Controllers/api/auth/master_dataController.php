<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_kategori;


class master_dataController extends Controller
{
    public function add()
    {
        // if
        
        tb_kategori::create([
           'nama' => 'Sayur',
           'image' => 'sayur.jpg',
           'status' =>'aktif'        
        ]);

        return response()->json(['pesan'=>'berhasil',200]);
    }

    public function get()
    {
       $data= tb_kategori::all();

       return response()->json(['data'=>$data,200]);

    }

    public function update($id)
    {
       $data=tb_kategori::find($id);
       $data->status='aktif';
       $data->save();
       return $data;
    }

    public function delete($id)
    {
        $data=tb_kategori::find($id);
        $data->delete();
        return response()->json(['berhasil dihapus']);
    }
}
