<?php

namespace App\View\Components;

use App\Models\Alumni;
use App\Models\DataMaba;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Statistik extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $alumni = Alumni::count();
        $alumni_tahun = Alumni::where('tahun_lulus', now()->year())->count();
        // Ambil semua data alumni
        $dataAlumni = Alumni::all();
        $alumni_tepat = Alumni::where('predikat', 'cumlaude')->count();
        $maba_tahun = DataMaba::where('tahun_masuk', now()->year())->count();
        return view('components.statistik', compact('alumni', 'alumni_tahun', 'alumni_tepat', 'maba_tahun'));
    }
}
