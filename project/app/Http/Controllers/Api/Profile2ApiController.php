<?php

namespace App\Http\controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluhan2;
use Illuminate\Support\Facades\Hash;

class Profile2ApiController extends Controller
{
  public function store(Request $request, Keluhan2 $user)
  {
        //validasi data
        $this->validate($request, [
          'nama' => ['required', 'string', 'max:150','regex:/^[\pL\s\-]+$/u'],
          'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
          'isi' => ['required', 'string','max:1500'],
        ]);


      //simpan data
      $user = Keluhan2::create([
          'nama' => $request->nama,
          'email' => $request->email,
          'isi' => $request->isi,
        
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
