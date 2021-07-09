<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request, 
App\Http\Controllers\Controller;
use DB;

class PostArtikelController extends Controller
{
    public function index()
    {
        $penulis = auth()->user()->id;
        $tabel_artikel = DB::table('tabel_artikel', $penulis)->get();

        return view('backend.dashboardpasien.post', compact('tabel_artikel'));
    }
    
}