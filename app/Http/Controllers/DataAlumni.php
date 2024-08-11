<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class DataAlumni extends BaseController
{
    public function index()
    {
        $module = 'Data Alumni';
        return view('admin.alumni.index', compact('module'));
    }

    public function get()
    {
        // Ambil semua pengguna dengan peran 'alumni'
        $users = User::where('role', 'alumni')->get();

        // Iterasi melalui setiap pengguna untuk menghubungkan dengan data alumni
        foreach ($users as $user) {
            $alumni = Alumni::where('uuid_user', $user->uuid)->first();

            if ($alumni) {
                // Tambahkan tahun masuk dan tahun lulus ke pengguna
                $user->tahun_masuk = $alumni->tahun_masuk;
                $user->tahun_lulus = $alumni->tahun_lulus;
            } else {
                // Jika tidak ada data alumni yang sesuai, tambahkan nilai default atau null
                $user->tahun_masuk = null;
                $user->tahun_lulus = null;
            }
        }

        // Mengembalikan data dalam format JSON
        return $this->sendResponse($users, 'Get data success');
    }
}
