<?php

namespace App\View\Components;

use App\Models\Loker as ModelsLoker;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Loker extends Component
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
        $loker = ModelsLoker::paginate(9);
        return view('components.loker', compact('loker'));
    }
}
