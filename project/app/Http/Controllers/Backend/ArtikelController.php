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
    public function search(Request $request)
    {
      $search = $request->get('search');
      $listartikel= DB::table('tabel_artikel')->where('judul','LIKE','%'.$search.'%')->paginate(5);
       return view('backend.artikel.listartikel',compact('listartikel'));
    }
    public function store(Request $request)
    {
      $request->validate([
        "foto" => "required|mimes:jpg,jpeg,png,svg"]);
        $foto = time()."-".$request->foto->getClientOriginalName();
        $request->foto->move(public_path('/img'),$foto);

        DB::table('tabel_artikel')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'isi' => $request->isi,
            'foto' =>$foto,
        ]);

        return redirect('listartikel')
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

      $request->validate([
        "foto" => "required|mimes:jpg,jpeg,png,svg"]);
        $foto = time()."-".$request->foto->getClientOriginalName();
        $request->foto->move(public_path('/img'),$foto);

      DB::table('tabel_artikel')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tanggal' => $request->tanggal,
        'keterangan' => $request->keterangan,
        'isi' => $request->isi,
        'foto' =>$foto,
      ]);
      return redirect('listartikel')->with('success','Data artikel berhasil diperbaharui.');
    }

    public function destroy($id)
    {
      DB::table('tabel_artikel')->where('id',$id)->delete();
      return redirect('listartikel')->with('success','Data artikel berhasil dihapus.');
    }
}
