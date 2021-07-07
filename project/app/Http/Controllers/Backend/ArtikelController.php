<?php

namespace App\Http\controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use DB;
class ArtikelController extends Controller
{
    public function index()
    {
        return view('backend.artikel.artikel1');
    }
    public function create()
    {
        $listartikel = null;
        return view('backend.artikel.artikel1',compact('tabel_artikel'));
    }
    public function store(Request $request)
    {
        DB::table('tabel_artikel')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'isi' => $request->isi,
            'foto' =>$request->foto,
        ]);

        return redirect()->route('listartikel')
                         ->with('success', 'Data biodata_dokter baru telah disimpan.');
    }
    public function edit($id)
    {
      $tabel_artikel = DB::table('tabel_artikel')->where('id',$id)->first();
      $admin_lecturer = "Mengubah";
      return view('backend.artikel.artikel1', compact('tabel_artikel','admin_lecturer'));
    }

    public function update(Request $request)
    {
      DB::table('tabel_artikel')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tanggal' => $request->tanggal,
        'keterangan' => $request->keterangan,
        'isi' => $request->isi,
        'foto' =>$request->foto,
      ]);
      return redirect()->route('artikel1')
                      ->with('success','Data artikel berhasil diperbaharui.');
    }

    public function destroy($id)
    {
      DB::table('tabel_artikel')->where('id',$id)->delete();
      return redirect()->route('listartikel')
                      ->with('success','Data artikel berhasil dihapus.');
    }
}
