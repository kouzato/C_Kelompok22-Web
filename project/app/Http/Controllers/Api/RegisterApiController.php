<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterApiController extends Controller
{
    public function store(Request $request, User $user)
    {
          //validasi data
          $this->validate($request, [
            'name' => ['required', 'string', 'max:150','regex:/^[\pL\s\-]+$/u'],
            'username' => ['required', 'string', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
            'password' => ['required','min:6','confirmed'],
        ]);

        //simpan data
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
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
