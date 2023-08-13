<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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
    return view('User.index');
});

Route::get('/products', [HomeController::class,'displayProduct']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/aboutus', [HomeController::class,'aboutus']);
Route::get('/cart', [HomeController::class,'cart']);
Route::get('/checkout', [HomeController::class,'checkout']);
Route::get('/blog', [HomeController::class,'blog']);
Route::get('/blog-details', [HomeController::class,'blogdetails']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get("/category", [AdminController::class, "category"]);
    Route::post("/category/save", [AdminController::class, "save"])->name('category');
    Route::get("/category/delete/{id}", [AdminController::class, "delete"]);

    Route::get("/product", [ProductController::class, "product"]);
    Route::post("/save", [ProductController::class, "save"]);
    Route::get("/delete/{id}", [ProductController::class, "delete"]);
    Route::get("/edit/{id}", [ProductController::class, "edit"]);
    Route::post("/update/{id}", [ProductController::class, "update"]);


});

Route::group(['middleware' => ['auth']], function () {

    //   user routes
    
});
