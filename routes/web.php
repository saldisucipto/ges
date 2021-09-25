<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('ges-admin', function () {
        return view('dashboard');
    })->name('dashboard');;
    Route::prefix('ges-admin')->group(function () {
        // Navigasi
        Route::get('/navigasi', 'DashboardController@navigasi')->name('navigasi');
        Route::post('/naviasi/create', 'DashboardController@create')->name('createNavigasi');
        Route::match(['put', 'delete'], '/navigasi/{id}', 'DashboardController@update')->name('updateNavigasi');
        // Sliders
        Route::get('/sliders', 'DashboardController@sliders')->name('sliders');
        Route::post('/sliders/create', 'DashboardController@createSlider')->name('createSliders');
    });
});

require __DIR__ . '/auth.php';
