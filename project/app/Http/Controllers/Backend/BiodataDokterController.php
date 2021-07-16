<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;

class BiodataDokterController extends Controller
{
    public function index()
    {
        return view('backend.biodatadokter.biodatadokter');
    }
    public function create()
    {
        $biodata_dokter = null;
        return view('backend.biodatadokter.biodatadokter',compact('biodata_dokter'));
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $biodatadokter= DB::table('biodata_dokter')->where('nama_dokter','LIKE','%'.$search.'%')->paginate(5);
       return view('backend.biodatadokter.listdokter',compact('biodatadokter'));
    }
    public function store(Request $request)
    {
        DB::table('biodata_dokter')->insert([
            'nama_dokter' => $request->nama_dokter,
            'alamat_dokter' => $request->alamat,
            'username_dokter' => $request->username_dokter,
            'password_dokter' => $request->password_dokter,
            'confirm_password_dokter' => $request->confirm_password_dokter,
            'email_dokter' => $request->email_dokter,
        ]);

        return redirect('listdokter')
                         ->with('success', 'Data biodata_dokter baru telah disimpan.');
    }
    public function edit($id)
    {
      $biodata_dokter = DB::table('biodata_dokter')->where('id',$id)->first();
      $admin_lecturer = "Mengubah";
      return view('backend.biodatadokter.biodatadokter', compact('biodata_dokter','admin_lecturer'));
    }

    public function update(Request $request)
    {
      DB::table('biodata_dokter')->where('id',$request->id)->update([
        'nama_dokter' => $request->nama_dokter,
        'alamat_dokter' => $request->alamat,
        'username_dokter' => $request->username_dokter,
        'password_dokter' => $request->password_dokter,
        'confirm_password_dokter' => $request->confirm_password_dokter,
        'email_dokter' => $request->email_dokter,
      ]);
      return redirect('listdokter')
                      ->with('success','Data Dokter berhasil diperbaharui.');
    }

    public function destroy($id)
    {
      DB::table('biodata_dokter')->where('id',$id)->delete();
      return redirect('listdokter')
                      ->with('success','Data Dokter berhasil dihapus.');
    }
}

