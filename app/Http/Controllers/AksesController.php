<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Akses;
use Hash;

class AksesController extends Controller
{

    public function __construct()
    {

    }

    public function index(){
        $dataAkses = Akses::all();
        return response()->json([
                  'success' => true,
                  'message' => 'Success',
                  'data' => $dataAkses
            ], 200);
    }

    public function store(Request $request)
    {
          $input = $request->all();
          $data = Akses::create($input);
          if($data){
                return response()->json([
                       'success' => true,
                       'code' => 201,
                       'message' => 'data berhasil disimpan',
                       'data' => $data
                       ], 201);
          }else{
                return response()->json([
                       'success' => false,
                       'code' => 400,
                       'message' => 'data gagal disimpan',
                       'data' => ''
                     ], 400);
          }
    }

    public function update(Request $request, $id)
    {
          $input = $request->all();
          $Akses = Akses::find($id);
          $Akses = $Akses->update($input);
          // return dd($request);
          if($Akses){
                return response()->json([
                       'success' => true,
                       'code' => 201,
                       'message' => 'data berhasil diubah',
                       'data' => $input
                       ], 201);
          }else{
                return response()->json([
                       'success' => false,
                       'code' => 400,
                       'message' => 'data gagal diubah',
                       'data' => ''
                     ], 400);
          }
    }


    public function show($id){
        $dataAkses = Akses::find($id);
        return response()->json([
              'success' => true,
              'message' => 'Data is Found!',
              'data' => $dataAkses
            ], 200);
    }

    public function delete($id)
    {
          $Akses = Akses::find($id);
          $data = $Akses->delete();
          if($data){
                return response()->json([
                  'success' => true,
                  'code' => 201,
                  'message' => 'data berhasil dihapus',
                  'data' => $data
                ], 201);
          }else{
                return response()->json([
                  'success' => false,
                  'code' => 400,
                  'message' => 'data gagal dihapus',
                  'data' => ''
                ], 400);
          }
    }
}
