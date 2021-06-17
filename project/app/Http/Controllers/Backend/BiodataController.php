<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function index()
    {
        return view('backend.biodata');
    }
}
