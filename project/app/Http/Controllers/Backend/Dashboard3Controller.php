<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class Dashboard3Controller extends Controller
{
    public function index()
    {
        $penulis = auth()->user()->id;
        $tabel_artikel = DB::table('tabel_artikel', $penulis)->get();

        return view('backend/dashboardpasien.dashboard3', compact('tabel_artikel'));
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $tabel_artikel= DB::table('tabel_artikel')->where('judul','LIKE','%'.$search.'%')->paginate(5);
       return view('backend.dashboardpasien.dashboard3',compact('tabel_artikel'));
    }

}

