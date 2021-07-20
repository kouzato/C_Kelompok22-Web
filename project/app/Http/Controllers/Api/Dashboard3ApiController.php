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
        $ListArtikel = ListArtikel::all();
        return response()->json(['kode' => 201,'pesan' => 'success', 'data' => $ListArtikel  ]);
    }

    public function show($id)
    {
        # code...
        $ListArtikel =DB::table($id)->first();
        return response()->json($ListArtikel, 201);
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $ListArtikel= DB::table('tabel_artikel')->where('judul','LIKE','%'.$search.'%')->paginate(5);
      return response()->json(['data'=>$ListArtikel]);
    }
}

