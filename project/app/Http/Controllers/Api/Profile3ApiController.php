<?php

namespace App\Http\controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluhan;
use Illuminate\Support\Facades\Hash;

class Profile3ApiController extends Controller
{
  public function store(Request $request, Keluhan $user)
  {
        //validasi data
        $this->validate($request, [
          'nama' => ['required', 'string', 'max:150','regex:/^[\pL\s\-]+$/u'],
          'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
          'isi' => ['required', 'string','max:1500'],
          'foto' => ['required','mimes:jpg,jpeg,png,svg'],]);

        $foto = time()."-".$request->foto->getClientOriginalName();
        $request->foto->move(public_path('/img'),$foto);

      //simpan data
      $user = Keluhan::create([
          'nama' => $request->nama,
          'email' => $request->email,
          'isi' => $request->isi,
          'foto' => $foto,
      ]);

      //buat token untuk user
      $token = $user->createToken($user->id.'-AppToken', [
          'create',
          'read',
          'update',
          'delete',
      ])->plainTextToken;

      $response = [
          'user' => $user,
          'token' => $token,
      ];

      return response()->json($response);
  
  }
}
