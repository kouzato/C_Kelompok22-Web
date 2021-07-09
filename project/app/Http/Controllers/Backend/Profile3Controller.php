<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class Profile3Controller extends Controller
{
    public function index()
    {
        return view('backend.profile3');
    }
}