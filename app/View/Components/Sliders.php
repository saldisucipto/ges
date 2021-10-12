<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Sliders as datanya;

class Sliders extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slider = datanya::get();
        return view('components.sliders', [
            'slider' => $slider,
        ]);
    }
}
