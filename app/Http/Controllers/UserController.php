<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function regist(Request $request)
    {
        $hashedPassword = Hash::make($request->password);

        $postId = DB::table('users')->insertGetId([
            'email' => $request->input('email'),
            'password' => $hashedPassword,
        ]);

        return redirect()->intended('/'); // Ganti 'dashboard' dengan rute yang sesuai


    }

    public function index()
    {
        // Logika untuk menampilkan data pengguna
        $users = DB::select('select * from users');
        return response()->json($users);
    }
}
