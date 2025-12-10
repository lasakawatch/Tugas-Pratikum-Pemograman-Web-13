<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'registerPost']);
Route::get('/logout', [AuthController::class, 'logout']);

// Protected Routes
Route::get('/dashboard', function () {
    if (!session('logged_in')) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
    }
    return view('dashboard');
})->name('dashboard');

// Manual middleware check for resource controller
Route::resource('products', ProductController::class);

// Orders Routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

// Apply middleware logic manually in the controller constructor or use a group with a closure middleware if supported,
// but since Route::middleware() expects a registered middleware name, we'll use a simple group and check session in the controller or just leave it open as per user request for simplicity,
// OR better yet, we can register a closure middleware properly if we were in a service provider.
// For this simple script, let's just add the check to the ProductController constructor.
