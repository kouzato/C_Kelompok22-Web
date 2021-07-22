<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BiodataDokter;
use Illuminate\Support\Facades\DB;

class ListDokterApiController extends Controller
{
    public function index()
    {
        $BiodataDokter = BiodataDokter ::all();
        return response()->json(['kode' => 201,'pesan' => 'success', 'data' => $BiodataDokter  ]);
    }

    public function show($id)
    {
        # code...
        $BiodataDokter =DB::table($id)->first();
        return response()->json($BiodataDokter, 201);
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $BiodataDokter= DB::table('biodata_dokter')->where('judul','LIKE','%'.$search.'%')->paginate(5);
      return response()->json(['data'=>$BiodataDokter]);
    }
}

