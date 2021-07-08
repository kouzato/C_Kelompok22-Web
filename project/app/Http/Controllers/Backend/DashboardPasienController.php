<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class DashboardPasienController extends Controller
{
    public function index()
    {
        $penulis = auth()->user()->id;
        $tabel_artikel = DB::table('tabel_artikel', $penulis)->get();

        return view('backend/dashboardpasien.pasien', compact('tabel_artikel'));
    }

}

