<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade

class DataPegawaiController extends Controller
{
    public function regist(Request $request)
    {
        // Insert data menggunakan Query Builder
        $postId = DB::table('data_pegawai')->insertGetId([
            'nip' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'gaji_sekarang' => $request->input('gaji_sekarang'),
            'join_date' => $request->input('join_date'),
            'jabatan' => $request->input('jabatan'),
            'golongan' => $request->input('golongan'),
            'tmt_berkala' => $request->input('tmt_berkala')
        ]);

        // Kembalikan response dengan status dan data
        return response()->json([
            'message' => 'Post created successfully',
            'post' => $postId
        ], 201).redirect()->intended('/table');
    }

    public function delete($id)
    {
        // Temukan item berdasarkan ID
         // Menggunakan query builder untuk mencari dan menghapus item
         $deleted = DB::table('data_pegawai')->where('nip', $id)->delete();

         // Cek apakah ada baris yang dihapus
         if ($deleted) {
             return response()->json(['message' => 'Item deleted successfully'], 200);
         } else {
             return response()->json(['message' => 'Item not found'], 404);
         }
       
    }

    public function index()
    {
        // Logika untuk menampilkan data pengguna
        $users = DB::select('select * from data_pegawai');
        return response()->json($users);
    }
}