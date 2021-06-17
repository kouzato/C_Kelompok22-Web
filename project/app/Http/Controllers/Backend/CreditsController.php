<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class CreditsController extends Controller
{
    public function index()
    {
        return view('backend.credits');
    }
}