<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request, 
App\Http\Controllers\Controller;
use DB;

class PostArtikel3Controller extends Controller
{
    public function index(Request $request)
    {
        $id = $request->segment(2);
        $penulis = auth()->user()->id;
        $artikel = DB::table('tabel_artikel', $penulis)->where('id',$id)->first();

        return view('backend.dashboardpasien.post3',compact('artikel'));
    }
    
}