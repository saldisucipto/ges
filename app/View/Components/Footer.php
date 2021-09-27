<?php

namespace App\View\Components;

use App\Models\CompanyInfo;
use App\Models\Navigasi;

use Illuminate\View\Component;

class Footer extends Component
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
        $company_info = CompanyInfo::find(1);
        $navigasi = Navigasi::get();
        return view('components.footer', [
            'company_info' => $company_info,
            'navigasi' => $navigasi
        ]);
    }
}
