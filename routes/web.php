<?php

use App\Http\Controllers\MainControllers\CarsController;
use App\Http\Controllers\MainControllers\MyFirstController;
use App\Http\Controllers\MainControllers\PostController;
use App\Http\Controllers\MainControllers\PostController2;
use App\Http\Controllers\MainControllers\ProductController;
use App\Http\Controllers\MainControllers\ShopController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\SecondViewControllers\FollowerController;
use App\Http\Controllers\SecondViewControllers\HomeController;
use App\Http\Controllers\SecondViewControllers\WorkerController;
use App\Http\Controllers\ViewControllers\AboutController;
use App\Http\Controllers\ViewControllers\ContactController;
use App\Http\Controllers\ViewControllers\MainController;
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

Route::get('/', function () {
    return 'Kasym';
});

Route::get('/touch', function () {
    return 'Kasym salam';
});
Route::get('/abouts', [AboutController::class, 'abouts'])->name('about.index');
Route::get('/main', [MainController::class, 'main'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'contacts'])->name('contact.index');

Route::get('/instagram', IndexController::class)->name('post.index');
Route::get('/instagram/create', CreateController::class)->name('post.create');
Route::post('/instagram', StoreController::class)->name('post.store');
Route::get('/instagram/{post}', ShowController::class)->name('post.show');
Route::get('/instagram/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/instagram/{post}', UpdateController::class)->name('post.update');
Route::delete('/instagram/{post}', DestroyController::class)->name('post.delete');

//Route::group(['namespace' => 'Post'], function () {
//    Route::get('/instagram', [IndexController::class])->name('post.index');
//    Route::get('/instagram/create', [CreateController::class])->name('post.create');
//    Route::post('/instagram', [StoreController::class])->name('post.store');
//    Route::get('/instagram/{post}', [ShowController::class])->name('post.show');
//    Route::get('/instagram/{post}/edit', [EditController::class])->name('post.edit');
//    Route::patch('/instagram/{post}', [UpdateController::class])->name('post.update');
//    Route::delete('/instagram/{post}', [DestroyController::class])->name('post.delete');
//});

Route::get('/home', [HomeController::class, 'home'])->name('home.index');
Route::get('/workers', [WorkerController::class, 'workers'])->name('worker.index');
Route::get('/followers', [FollowerController::class, 'followers'])->name('follower.index');

//Route::get('/instagram', [PostController::class, 'instagram'])->name('post.index');
//Route::get('/instagram/create', [PostController::class, 'create'])->name('post.create');
//Route::post('/instagram', [PostController::class, 'store'])->name('post.store');
//Route::get('/instagram/{post}', [PostController::class, 'show'])->name('post.show');
//Route::get('/instagram/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
//Route::patch('/instagram/{post}', [PostController::class, 'update'])->name('post.update');
//Route::delete('/instagram/{post}', [PostController::class, 'destroy'])->name('post.delete');

Route::get('/products', [ProductController::class, 'products'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/instagram/update', [PostController::class, 'update']);

Route::get('/instagram/delete', [PostController::class, 'delete']);

Route::get('/instagram/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/family', [PostController2::class, 'family']);

Route::get('/family/create', [PostController2::class, 'create']);

Route::get('/family/update', [PostController2::class, 'update']);

Route::get('/family/delete', [PostController2::class, 'delete']);

Route::get('/family/first_or_create', [PostController2::class, 'firstOrCreate']);

Route::get('/products/update', [ProductController::class, 'update']);

Route::get('/products/delete', [ProductController::class, 'delete']);

Route::get('/products/first_or_create', [ProductController::class, 'firstOrCreate']);

Route::get('/cars', [CarsController::class, 'cars']);

Route::get('/cars/create', [CarsController::class, 'create']);

Route::get('/cars/update', [CarsController::class, 'update']);

Route::get('/cars/delete', [CarsController::class, 'delete']);

Route::get('/cars/first_or_create', [CarsController::class, 'firstOrCreate']);

Route::get('/shops', [ShopController::class, 'shops']);

Route::get('/shops/create', [ShopController::class, 'create']);

Route::get('/shops/update', [ShopController::class, 'update']);

Route::get('/shops/delete', [ShopController::class, 'delete']);

Route::get('/shops/first_or_create', [ShopController::class, 'firstOrCreate']);

Route::get('/talas', [MyFirstController::class, 'talas']);

Route::get('/batken', [MyFirstController::class, 'batken']);
