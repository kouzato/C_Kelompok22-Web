<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class ListdokterController extends Controller
{
    public function index()
    {
        $biodatadokter = DB::table('biodata_dokter')->get();
        return view('backend.biodatadokter.listdokter', compact('biodatadokter'));
    }
}
