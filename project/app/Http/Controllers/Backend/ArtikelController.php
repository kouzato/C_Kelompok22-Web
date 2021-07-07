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
            'Judul' => $request->judul,
            'Penulis' => $request->penulis,
            'Tanggal' => $request->tanggal,
            'Keterangan' => $request->keterangan,
            'Isi' => $request->isi,
            'Foto' =>$request->foto,
        ]);

        return redirect()->route('listartikel')
                         ->with('success', 'Data biodata_dokter baru telah disimpan.');
    }
    public function edit($id)
    {
      $biodata_dokter = DB::table('tabel_artikel')->where('id',$id)->first();
      $admin_lecturer = "Mengubah";
      return view('backend.artikel.artikel1', compact('tabel_artikel','admin_lecturer'));
    }

    public function update(Request $request)
    {
      DB::table('tabel_artikel')->where('id',$request->id)->update([
        'Judul' => $request->judul,
            'Penulis' => $request->penulis,
            'Tanggal' => $request->tanggal,
            'Keterangan' => $request->keterangan,
            'Isi' => $request->isi,
            'Foto' => $request ->foto,
      ]);
      return redirect()->route('artikel')
                      ->with('success','Data artikel berhasil diperbaharui.');
    }

    public function destroy($id)
    {
      DB::table('tabel_artikel')->where('id',$id)->delete();
      return redirect()->route('listartikel')
                      ->with('success','Data artikel berhasil dihapus.');
    }
}
