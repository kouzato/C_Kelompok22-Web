<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListArtikel;
use Illuminate\Support\Facades\DB;

class Dashboard3ApiController extends Controller
{
    public function index()
    {
        # code...
        $artikel = tabel_artikel::all();
        return response()->json(['kode' => 201,'pesan' => 'success', 'data' => $artikel  ]);
    }

    public function show($id)
    {
        # code...
        $artikel = tabel_artikel::find($id)->first();
        return response()->json($artikel, 201);
    }

    public function search(){ 

            $search_text = $_GET['query'];
            $artikel = DB::table('tabel_artikel')->where('judul','LIKE','%'.$search.'%')->paginate(5);
            return response()->json(['data'=>$artikel]);
    }
}

