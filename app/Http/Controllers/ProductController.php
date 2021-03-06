<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Classes\Files;
use App\Models\Product;
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

    public function product()
    {
        // return "Product";
        $data = CategoryProduct::get()->all();
        $product = Product::with('categoryProduct')->get()->all();
        // $datalagi = Product::with('categoryProduct')->get()->all();
        // dd($product);
        // die;
        return view('dashboard.product', [
            'data' => $data,
            'product' => $product
        ]);
    }

    public function createProduct(Request $request)
    {
        $data = $request->all();
        $createProduct = new Product();
        $imagesFile = new Files();
        $createProduct->id_category = $data['id_category'];
        $createProduct->tittle = $data['title'];
        $createProduct->slugs = Str::slug($data['title']);
        $createProduct->images = $imagesFile->upload($request->images, 'product', 'product-images');
        $createProduct->description = $data['description'];
        $createProduct->save();
        return redirect('/ges-admin/products')->with('success', 'Berhasil Membuat Product Baru');
    }

    public function updateProduct(Request $update, $id = null)
    {
        if ($update->isMethod('PUT')) {
            $data = $update->all();
            $dataPost = Product::find($id)->with('categoryProduct')->first();
            $imagePost = $update->file('images');
            $imagesFile = new Files();
            if ($imagePost) {
                $dataPost->id_category = $data['id_category'];
                $dataPost->tittle = $data['title'];
                $dataPost->slugs = Str::slug($data['title']);
                $imagesFile->update($dataPost->images, 'product');
                $dataPost->images = $imagesFile->upload($update->file('images'), 'product', 'product-images');
                $dataPost->description = $data['description'];
                $dataPost->save();
                return redirect('/ges-admin/products')->with('success', 'Berhasil Update Data!');
            } else {
                $dataPost->id_category = $data['id_category'];
                $dataPost->tittle = $data['title'];
                $dataPost->slugs = Str::slug($data['title']);
                // $imagesFile->update($dataPost->images, 'product');
                // $dataPost->images = $imagesFile->upload($update->images, 'product', 'product-images');
                $dataPost->description = $data['description'];
                $dataPost->save();
                return redirect('/ges-admin/products')->with('success', 'Berhasil Update Data!');
            }
        }
        $data = Product::find($id);
        $cat = CategoryProduct::get()->all();
        return view('dashboard.product-update', [
            'data' => $data,
            'cat' => $cat
        ]);
    }

    public function deleteProduct($id)
    {
        $deleteProduct = Product::find($id);
        $imageLama = new Files();
        $imageLama->update($deleteProduct->images, 'product');
        $deleteProduct->delete();
        return redirect('/ges-admin/products')->with('success', 'Berhasil Menghapus Data!');
    }
}
