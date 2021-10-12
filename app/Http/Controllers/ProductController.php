<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Classes\Files;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // index function category
    public function indexProdCat()
    {
        $data = CategoryProduct::get()->all();
        return view('dashboard.categoryProduct', ['data' => $data,]);
    }

    // function create and edit
    public function createCategory(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // die;
        $categoryProduct = new CategoryProduct;
        $categoryImages = new Files;
        $categoryProduct->title = $data['title'];
        $categoryProduct->slugs = Str::slug($data['title']);
        $categoryProduct->description = $data['description'];
        $categoryProduct->images = $categoryImages->upload($request->file('images'), 'category-product', 'category-product-images');
        $categoryProduct->save();
        return redirect()->back()->with('success', 'Berhasil Membuat Category Product Baru');
    }

    // function Update
    public function editCategoryProduct(Request $update, $id = null)
    {
        if ($update->isMethod('PUT')) {
            $data = $update->all();
            $images = $update->file('images');
            $updateCatProduct = CategoryProduct::find($id);
            $categoryProduct = new Files;
            if ($images) {
                $updateCatProduct->title = $data['title'];
                $updateCatProduct->slugs = Str::slug($data['title']);
                $updateCatProduct->description = $data['description'];
                $categoryProduct->update($updateCatProduct->images, 'category-product');
                $updateCatProduct->images = $categoryProduct->upload($update->file('images'), 'category-product', 'category-product-images');
                $updateCatProduct->save();
                return redirect()->back()->with('success', 'Berhasil Memperbaharui Category Product Baru');
            } else {
                $updateCatProduct->title = $data['title'];
                $updateCatProduct->slugs = Str::slug($data['title']);
                $updateCatProduct->description = $data['description'];
                $updateCatProduct->save();
                return redirect()->back()->with('success', 'Berhasil Memperbaharui Category Product Baru');
            }
        }
        $data = CategoryProduct::find($id);
        return view('dashboard.updateCategory', [
            'data' => $data
        ]);
    }

    public function deleteCat($id)
    {
        // return "Hapus aja";
        $updateCatProduct = CategoryProduct::find($id);
        $categoryProduct = new Files;
        $categoryProduct->update($updateCatProduct->images, 'category-product');
        $updateCatProduct->delete();
        return redirect('/ges-admin/products-category')->with('success', 'Berhasil Menghapus Category Product');
    }
}
