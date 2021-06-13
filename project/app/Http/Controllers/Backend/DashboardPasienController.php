<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;


class DashboardPasienController extends Controller
{
    public function index()
    {
        return view('backend/dashboardpasien.pasien');
    }
}
