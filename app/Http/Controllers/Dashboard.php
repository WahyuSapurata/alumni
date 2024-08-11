<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Buku;
use App\Models\DataMaba;
use App\Models\Loker;
use App\Models\Peminjaman;
use App\Models\SurveyPengguna;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends BaseController
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return redirect()->route('login.login-akun');
    }

    public function dashboard()
    {
        $module = 'Dashboard';
        $alumni = Alumni::count();
        $tahun = Carbon::now()->year;
        $maba = DataMaba::where('tahun_masuk', $tahun)->count();
        $survey = SurveyPengguna::count();
        return view('dashboard.index', compact(
            'module',
            'alumni',
            'maba',
            'survey',

        ));
    }

    public function dashboard_alumni()
    {
        $module = 'Dashboard';
        $alumni = Alumni::where('uuid_user', auth()->user()->uuid)->first();
        return view('dashboard.alumni', compact(
            'module',
            'alumni'
        ));
    }

    public function areaChart()
    {
        // Mendapatkan data dari database menggunakan query builder Laravel
        $data = Alumni::selectRaw("tahun_lulus as year, COUNT(*) as count")
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        // Inisialisasi array data
        $result = [
            'labels' => [],
            'data' => []
        ];

        // Memproses hasil query
        foreach ($data as $row) {
            $result['labels'][] = $row->year;
            $result['data'][] = (int) $row->count;
        }

        // Mengembalikan data dalam format JSON
        return $this->sendResponse('Get data success', $result);
    }
}
