<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class, 'goToHome']);
Route::get('/viewAll/{category_id}', [HomeController::class, 'goToViewAll']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [ProfileController::class, 'loggingOut']);
    Route::delete('/deleteAccount', [ProfileController::class, 'deleteAccount']);
    Route::get('/profile', [ProfileController::class, 'goToProfile']);
    Route::patch('/profile/edit', [ProfileController::class, 'editAccount']);
    Route::get('/detail/{id}', [DetailController::class, 'goToEdit']);
    Route::get('/search', [HomeController::class, 'search']);

    Route::middleware(['UserOnly'])->group(function () {
        Route::get('/cart',[CartController::class, 'goToCart']);
        Route::post('/cart/addCart',[CartController::class, 'addCart']);
        Route::delete('/cart/deleteCart',[CartController::class, 'deleteCart']);
        Route::patch('/cart/minusCart',[CartController::class, 'minusCart']);
        Route::patch('/cart/plusCart',[CartController::class, 'plusCart']);

        Route::delete('/cart/purchase',[HistoryController::class, 'purchase']);

        Route::get('/history',[HistoryController::class,'goToHistory']);
    });

    Route::middleware(['AdminOnly'])->group(function () {
        Route::get('/edit', [EditController::class, 'goToEdit']);
        Route::post('/edit/createProduct', [EditController::class, 'createProduct']);
        Route::delete('/edit/deleteProduct', [EditController::class, 'deleteProduct']);
        Route::get('/edit/editProduct', [EditController::class, 'editProduct']);
        Route::patch('/edit/updateProduct', [EditController::class, 'updateProduct']);
    });
});


Route::middleware(['GuestOnly'])->group(function () {
    Route::get('/login', [LoginController::class, 'goToLogin']);
    Route::post('/login/auth', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'goToRegister']);
    Route::post('/register/createAccount', [RegisterController::class, 'createAccount']);
});
