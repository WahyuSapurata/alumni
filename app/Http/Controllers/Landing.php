<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class Landing extends BaseController
{
    public function index()
    {
        $module = 'Landing';
        return view('landing.index', compact('module'));
    }

    public function detail_berita($params)
    {
        $berita = Berita::where('uuid', $params)->first();
        $module = $berita->judul_berita;
        return view('landing.detailberita', compact('module', 'berita'));
    }
}
