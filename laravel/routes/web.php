<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AddProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detailpage', [DetailPageController::class, 'index'])->name('detailpage');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/adminpanel', [AdminPanelController::class, 'adminPanel'])->name('adminpanel');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/produkt/{id}', [ProductsController::class, 'show'])->name('detailpage');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/addproduct', [AddProductController::class, 'index'])->name('addproduct');
Route::post('/addproduct', [AddProductController::class, 'index'])->name('addproduct');
Route::post('/cart/buy-now/{id}', [CartController::class, 'buyNow'])->name('cart.buyNow');
Route::get('/product/{id}', [DetailPageController::class, 'show'])->name('product.show');
Route::get('/product/{id}', [ProductsController::class, 'show'])->name('product.show');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/addproduct', [ProductsController::class, 'store'])->name('addproduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profilepage', [ProfileController::class, 'edit'])->name('profilepage');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 
});


/*email*/

Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification email sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');







Auth::routes();




require __DIR__.'/auth.php';
