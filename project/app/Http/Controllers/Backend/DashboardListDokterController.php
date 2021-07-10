<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class DashboardListDokterController extends Controller
{
    public function index()
    {
        $nama_dokter = auth()->user()->id;
        $biodata_dokter = DB::table('biodata_dokter', $nama_dokter)->get();

        return view('backend/dashboardpasien.listdokter2', compact('biodata_dokter'));
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $biodata_dokter= DB::table('biodata_dokter')->where('nama_dokter','LIKE','%'.$search.'%')->paginate(5);
       return view('backend.dashboardpasien.listdokter2',compact('biodata_dokter'));
    }


}

