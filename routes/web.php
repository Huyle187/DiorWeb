<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BeautyController;
use App\Http\Controllers\frontend\FashionController;
use App\Http\Controllers\frontend\CollectionController;
use App\Http\Controllers\frontend\ProductDetailsController;
use App\Http\Controllers\frontend\CartController;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;

use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/beauty', [BeautyController::class, 'beauty']);

Route::get('/fashion', [FashionController::class, 'fashion']);
Route::get('/women-collection-{type}', [FashionController::class, 'women'])->name('collection.women');
Route::get('/men-collection-{type}', [FashionController::class, 'men'])->name('collection.men');
Route::get('/kid-collection-{type}', [FashionController::class, 'kid'])->name('collection.kid');


//Fashion->Collection
Route::get('/collection-{colID}-type-{type}', [CollectionController::class, 'collection'])->name('collection.index');

Route::get('/product-details-{id}', [ProductDetailsController::class, 'productDetails'])->name('product.details');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/cart/add/{id}', [CartController::class, 'addcart'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updatecart'])->name('cart.update');
Route::get('/cart/delete/{id}', [CartController::class, 'delcart'])->name('cart.delcart');

//Admin Page
Route::prefix('admin')->group(function (){
    Route::get('/',[UserController::class,'Login'])->name('login');
    Route::get('/logout',[UserController::class,'Logout'])->name('logout');
    Route::post('/login',[UserController::class,'Login_action'])->name('login.action');
    Route::get('/dashboard',[DashboardController::class,'Index'])->name('dashboard');
    //Manage Product
    Route::prefix('product')->group(function(){
        // Route::get('/',[ProductController::class,'Index'])->name('product.index');
        //Add new Product
        Route::get('create',[ProductController::class,'Create'])->name('product.create');
        Route::post('create',[ProductController::class,'Store'])->name('product.store');
        //Update Product
        Route::get('{id}-edit',[ProductController::class,'Edit'])->name('product.edit');
        Route::post('{id}-update',[ProductController::class,'Update'])->name('product.update');
        //Delete Product
        Route::get('trash',[ProductController::class,'Trash'])->name('product.trash');
        Route::get('{id}-deltrash',[ProductController::class,'Deltrash'])->name('product.deltrash');
        Route::get('{id}-retrash',[ProductController::class,'Retrash'])->name('product.retrash');
        Route::get('{id}-delete',[ProductController::class,'Delete'])->name('product.delete');
    });
});
