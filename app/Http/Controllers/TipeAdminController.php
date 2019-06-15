<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Tipe_admin;

class TipeAdminController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index(){
      $data = Tipe_admin::all();
      return response()->json([
               'success' => true,
               'code' => 200,
               'message' => 'Success',
               'data' => $data
             ], 200);
    }

    public function create(Request $request){
      $data = Tipe_admin::create(['nama_tipe_admin' => $request->nama_tipe_admin]);
      if($data){
            return response()->json([
                     'success' => true,
                     'code' => 201,
                     'message' => 'Input data berhasil dilakukan',
                     'data' => $data
                     ], 201);
      }else{
            return response()->json([
                     'success' => false,
                     'code' => 400,
                     'message' => 'Input data gagal dilakukan',
                     'data' => Null
                   ], 400);
      }
    }

    public function show($id){
      $data = Tipe_admin::find($id);
      if($data){
          return response()->json([
                   'success' => true,
                   'code' => 200,
                   'message' => 'Data Berhasil ditemukan',
                   'data' => $data
                 ], 200);
      }else{
          return response()->json([
                   'success' => false,
                   'code' => 400,
                   'message' => 'Data tidak ditemukan',
                   'data' => null
                 ], 400);
      }
    }

    public function delete($id){
        $data = Tipe_admin::find($id);
        if($data){
            $data->delete();
            return response()->json([
                     'success' => true,
                     'code' => 201,
                     'message' => 'Hapus data berhasil dilakukan',
                     'data' => $data
                     ], 201);
        }else{
            return response()->json([
                     'success' => true,
                     'code' => 400,
                     'message' => 'Data Tidak ditemukan',
                     'data' => NULL
                     ], 201);
        }
    }
}
