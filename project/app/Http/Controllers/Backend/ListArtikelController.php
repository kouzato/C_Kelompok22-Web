<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class ListArtikelController extends Controller
{
    public function index()
    {
        $listartikel = DB::table('tabel_artikel')->get();
        return view('backend.artikel.listartikel', compact('listartikel'));
    }
}
