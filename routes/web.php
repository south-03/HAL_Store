<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/account', function () {
    return view('account');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
Route::get('/collections/{category_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_name}/{product_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);
Route::get('product-list', [FrontendController::class, 'productListAjax']);
Route::post('searchproduct', [FrontendController::class, 'searchproduct']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function ()
{
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

    // Category
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');

    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('/products/{product_id}/delete', 'destroy');
        
        Route::get('product-image/{product_image_id}/delete', 'destroyImage');
    });

    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () { 
        Route::get('/users', 'index');
        Route::get('/users/{id}/edit', 'edit');
        Route::put('/users/{id}', 'update');
        Route::get('/users/{id}/delete', 'delete');
    });
});

    Route::controller(App\Http\Controllers\HomeController::class)->group(function () { 
        Route::get('/home', 'index');
        Route::get('/home/{id}/edit', 'edit');
        Route::put('/home/{id}', 'update');
    });
    

Auth::routes();

