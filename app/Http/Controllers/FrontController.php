<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use App\Models\Product;
use App\Models\CategoryProduct;

class FrontController extends Controller
{
    // product
    public function produk()
    {
        $dataProduct = Product::with('categoryProduct')->get();
        $catPro = CategoryProduct::get();
        return view('front.product', [
            'dataProduct' => $dataProduct,
            'catPro' => $catPro
        ]);
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

    // product details
    public function productDetail($slugs)
    {
        $dataProduct = Product::with('categoryProduct')->where('slugs', $slugs)->first();
        // dd($dataProduct);
        // die;
        return view('front.product-detail', [
            'dataProduct' => $dataProduct,
        ]);
    }
}
