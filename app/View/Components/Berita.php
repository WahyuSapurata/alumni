<?php

namespace App\View\Components;

use App\Models\Berita as ModelsBerita;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Berita extends Component
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
        $berita = ModelsBerita::paginate(6);
        $newBerita = ModelsBerita::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('components.berita', compact('berita', 'newBerita'));
    }
}
