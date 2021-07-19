<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class PostArtikel3ApiController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->segment(2);
        $penulis = auth()->user()->id;
        $artikel = DB::table('tabel_artikel', $penulis)->where('id',$id)->first();

        return view('backend.dashboardpasien.post3',compact('artikel'));
    }
    
}