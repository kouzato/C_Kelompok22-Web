<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request, 
App\Http\Controllers\Controller;
use DB;

class PostArtikel3Controller extends Controller
{
    public function index()
    {
        $penulis = auth()->user()->id;
        $tabel_artikel = DB::table('tabel_artikel', $penulis)->get();

        return view('backend.dashboardpasien.post3', compact('tabel_artikel'));
    }
    
}