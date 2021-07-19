<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;
class Profile3Controller extends Controller
{
    public function index()
    {
        return view('backend.profile3');
    }
    public function create()
    {
        $keluhan = null;
        return view('backend.profile3',compact('keluhan'));
    }

    public function store(Request $request)
    {
      $request->validate([
        "foto" => "required|mimes:jpg,jpeg,png,svg"]);
        $foto = time()."-".$request->foto->getClientOriginalName();
        $request->foto->move(public_path('/img'),$foto);

        DB::table('keluhan')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->isi,
            'foto' =>$foto,
        ]);

        return redirect('profile3')
                         ->with('success', 'Data biodata_dokter baru telah disimpan.');
    }
    public function edit($id)
    {
      $tabel_artikel = DB::table('keluhan')->where('id',$id)->first();
      $admin_lecturer = "Mengubah";
      return view('backend.profile3', compact('keluhan','admin_lecturer'));
    }

    public function update(Request $request)
    {

      $request->validate([
        "foto" => "required|mimes:jpg,jpeg,png,svg"]);
        $foto = time()."-".$request->foto->getClientOriginalName();
        $request->foto->move(public_path('/img'),$foto);

      DB::table('keluhan')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'isi' => $request->isi,
        'foto' =>$foto,
      ]);
      return redirect('profile')->with('success','Data artikel berhasil diperbaharui.');
    }

    public function destroy($id)
    {
      DB::table('keluhan')->where('id',$id)->delete();
      return redirect('profile')->with('success','Data artikel berhasil dihapus.');
    }
}
