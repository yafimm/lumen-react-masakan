<?php

namespace App\Http\Controllers;

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

    public function show($id){
        $dataAkses = Akses::find($id);
        return response()->json([
              'success' => true,
              'message' => 'Data is Found!',
              'data' => $dataAkses
            ], 200);
    }
}
