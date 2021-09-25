<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Navigasi as datanya;

class Navigasi extends Component
{
    public function render()
    {
        $nav = datanya::get()->all();
        return view('livewire.navigasi');
    }
}
