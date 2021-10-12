<?php

use Illuminate\Support\Facades\Route;
use App\Models\CompanyInfo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', 'FrontController@produk');
Route::get('/about', 'FrontController@about');
Route::get('/contact', 'FrontController@contact');
Route::get('/product-detail/{slugs}', 'FrontController@productDetail');



Route::middleware(['auth'])->group(function () {
    Route::get('ges-admin', function () {
        $company_info = CompanyInfo::find(1);
        return view('dashboard', [
            'company_info' => $company_info
        ]);
    })->name('dashboard');
    ;
    Route::prefix('ges-admin')->group(function () {
        // Company Info
        Route::put('/company_info/update/', 'DashboardController@updateCompanyInfo')->name('updateCompanyInfo');
        // Navigasi
        Route::get('/navigasi', 'DashboardController@navigasi')->name('navigasi');
        Route::post('/naviasi/create', 'DashboardController@create')->name('createNavigasi');
        Route::match(['put', 'delete'], '/navigasi/{id}', 'DashboardController@update')->name('updateNavigasi');
        // Sliders
        Route::get('/sliders', 'DashboardController@sliders')->name('sliders');
        Route::post('/sliders/create', 'DashboardController@createSlider')->name('createSliders');
        Route::match(['PUT', 'DELETE'], '/sliders/update/{id}', 'DashboardController@updateSlider')->name('updateSliders');
        // Static Pages
        Route::get('/static-pages', 'StaticPagesController@index')->name('staticPages');
        Route::post('/static-pages/create', 'StaticPagesController@staticPages')->name('createPages');
        // Product Category Pages
        Route::get('/products-category', 'ProductController@indexProdCat')->name('productCategory');
        Route::post('/product-category-create', 'ProductController@createCategory')->name('createCategory');
        Route::match(['get', 'put'], '/category-product/{id}', 'ProductController@editCategoryProduct');
        Route::get('/delete-category/{id}', 'ProductController@deleteCat');
        // Product
        Route::get('/products', 'ProductController@product')->name('products');
        Route::post('/product-create', 'ProductController@createProduct')->name('createProduct');
        Route::match(['get', 'put'], '/products-update/{id}', 'ProductController@updateProduct');
        Route::get('/products-destory/{id}', 'ProductController@deleteProduct');
    });
});

require __DIR__ . '/auth.php';
