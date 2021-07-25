<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class Profile2Controller extends Controller
{
    public function index()
    {
        $keluhan2 = DB::table('keluhan2')->get();
        return view('backend.profile2', compact('keluhan2'));
    }
    public function destroy($id)
    {
      DB::table('keluhan2')->where('id',$id)->delete();
      return redirect('profile2')->with('success','Data keluhan berhasil dihapus.');
    }
}