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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::post('/', [AdminController::class, 'login']);
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/insertproduct', [ProductController::class, 'create']);

        Route::post('/insertproduct', [ProductController::class, 'store']);

        Route::get('/insertstore', [StoreController::class, 'create']);
        Route::post('/insertstore', [StoreController::class, 'store']);

        Route::get('/insertcategory', [CategoryController::class, 'create']);
        Route::post('/insertcategory', [CategoryController::class, 'store']);

        Route::get('/register', [RegisterController::class, 'create']);
        Route::post('/register', [RegisterController::class, 'store']);
    });
});


Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('home');
});
