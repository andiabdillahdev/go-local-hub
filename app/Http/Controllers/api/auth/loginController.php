<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    //

    public function login( Request $request)
    {
        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        // dd($data);
            // return response()->json(['message'=>$data]);
      

        if( auth()->attempt($data)){
             
            $token = auth()->user()->createToken('MyApp')->accessToken;
            return response()->json(['token'=>$token, 'message'=>'Berhasil!', 'status'=>true, 'data'=>$data]);
        }
        else
        {
            return response()->json(['message'=>'gagal']);
        }
       
    }
}
