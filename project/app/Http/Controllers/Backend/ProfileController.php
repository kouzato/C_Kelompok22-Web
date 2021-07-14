<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        $keluhan = DB::table('keluhan')->get();
        return view('backend.profile', compact('keluhan'));
    }
    
}