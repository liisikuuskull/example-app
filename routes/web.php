<?php

use App\Http\Controllers\CartAddController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartRemoveController;
use App\Http\Controllers\ShopController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart-add', CartAddController::class)->name('cart.add');
Route::post('/cart-remove', CartRemoveController::class)->name('cart.remove');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

