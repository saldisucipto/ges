<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class FrontController extends Controller
{
    // product
    public function produk()
    {
        return view('front.product');
    }

    // about
    public function about()
    {
        return view('front.about');
    }

    // contact
    public function contact()
    {
        $data = CompanyInfo::find(1);
        return view('front.contact', [
            'data' => $data
        ]);
    }
}
