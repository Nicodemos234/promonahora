<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
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

Route::get('/', [ProductController::class, 'index'])
    ->name('home');

Route::get(
    '/oferta/{nome}-{productid}',
    [ProductController::class, 'show']
)->where('nome', '.*');

Route::get('/admin/insertproduct', [ProductController::class, 'create'])
    ->middleware('auth');

Route::post('/admin/insertproduct', [ProductController::class, 'store'])
    ->middleware('auth');

Route::get('/admin/insertstore', [StoreController::class, 'create'])
    ->middleware('auth');
Route::post('/admin/insertstore', [StoreController::class, 'store'])
    ->middleware('auth');

Route::get('/admin/insertcategory', [CategoryController::class, 'create'])
    ->middleware('auth');
Route::post('/admin/insertcategory', [CategoryController::class, 'store'])
    ->middleware('auth');

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'login']);

Route::get('/admin/register', [RegisterController::class, 'create']);
Route::post('/admin/register', [RegisterController::class, 'store']);