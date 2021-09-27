<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('front.contact');
    }
}
