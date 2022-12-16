<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LogoutController;
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

Route::get('/cart', function () {
    return view('cart',[
        "title" => "Cart",
    ]);
});

Route::get('/profile', [ProfileController::class, 'goToProfile']);

Route::get('/detail/{id}', [DetailController::class, 'goToEdit']);

Route::get('/edit', [EditController::class, 'goToEdit']);
Route::post('/edit/createProduct', [EditController::class, 'createProduct']);
Route::delete('/edit/deleteProduct', [EditController::class, 'deleteProduct']);
Route::delete('/edit/editProduct', [EditController::class, 'editProduct']);

Route::get('/login', [LoginController::class, 'goToLogin']);
Route::post('/login/auth', [LoginController::class, 'authenticate']);

Route::post('/logout', [LogoutController::class, 'loggingOut']);

Route::get('/register', [RegisterController::class, 'goToRegister']);
Route::post('/register/createAccount', [RegisterController::class, 'createAccount']);
