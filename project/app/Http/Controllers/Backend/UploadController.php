<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function index()
    {
        return view('backend.upload');
    }
}