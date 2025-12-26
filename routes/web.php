<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController2;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/who', function () {
    dd('Kasym');
    return __FILE__;
});

Route::get('/', function () {
    return 'Kasym salam';
});

Route::get('/touch', function () {
    return 'Kasym salam';
});

Route::get('/instagram', [PostController::class, 'instagram']);

Route::get('/instagram/create', [PostController::class, 'create']);

Route::get('/instagram/update', [PostController::class, 'update']);

// Route::get('/product/update', [ProductsController::class,'update']);

Route::get('/family', [PostController2::class, 'family']);

// Route::get('/product', [ProductsController::class, 'product']);

Route::get('/cars', [CarsController::class, 'cars']);

Route::get('/talas', [MyFirstController::class, 'talas']);

Route::get('/batken', [MyFirstController::class, 'batken']);