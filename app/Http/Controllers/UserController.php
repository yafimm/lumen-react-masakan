<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;


class UserController extends Controller
{

    public function __construct()
    {
        //
    }


    public function index(){
        $user = User::all();
        return response()->json([
                  'success' => true,
                  'message' => 'Success',
                  'data' => $user
            ], 200);
    }


    public function create(Request $request){
        $password = Hash::make($request->password);
        $data = [
                 'username' => $request->username,
                 'password' => $password,
                 'nama' => $request->nama,
                 'email' => $request->email,
                 'alamat' => $request->alamat,
                 'no_telp' => $request->no_telp
               ];

       $register = User::create($data);
       if($register){
           return response()->json([
                    'success' => true,
                    'code' => 201,
                    'message' => 'Register berhasil dilakukan',
                    'data' => $register
                    ], 201);
       }else{
           return response()->json([
                    'success' => false,
                    'code' => 400,
                    'message' => 'Register gagal dilakukan',
                    'data' => $register
                  ], 400);
       }
    }


    public function show($username){
        $user = User::find($username);
        if($user){
            $akses = User::find($username)->akses; // Sengaja dipisah, kalo disatuin, var user bakal nampilin semua relasinya
            $data = null; // default akses

            foreach ($akses as $akses) {
              if($akses->pivot->status == 'Aktif'){
                $data = $akses;
              }
            };

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'User Found!',
                'data' => ['user' => $user, 'akses' => $data],
              ], 200);

        }else{
            return response()->json([
                'success' => false,
                'code' => 400,
                'message' => 'User not found!',
                'data' => Null,
              ], 400);
        }
    }


}
