<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\CollectionController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/beauty', [BeautyController::class, 'beauty']);

Route::get('/fashion', [FashionController::class, 'fashion']);

Route::get('/women-fashion-spring-summer-2022-collection', [CollectionController::class, 'collection']);

