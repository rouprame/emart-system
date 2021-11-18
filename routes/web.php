<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\Admin;
use App\Http\Livewire\User;
use App\Http\Livewire\Shop;
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

Route::get('/', HomeComponent::class)->name('user_home');
Route::get('redirects', 'App\Http\Controllers\AuthRedirect@index')->middleware('verified');

//Shop Routes
Route::get('/product/{slug}', Shop\ProductDetails::class)->name('product.details');
Route::get('/cart', Shop\ShoppingCart::class)->name('cart');
Route::get('/checkout', Shop\Checkout::class)->name('checkout');

Route::name('user.')->prefix('user')->middleware(['check_if_user', 'verified'])->group(function () {
    Route::get('/overview', User\AccountOverview::class)->name('overview');
    Route::get('/address', User\AddressManagement::class)->name('address');
    Route::get('/address/create', User\AddressCreate::class)->name('address.create');
    Route::get('/address/edit/{id}', User\AddressEdit::class)->name('address.edit');
}); 

Route::name('admin.')->prefix('admin')->middleware(['check_if_admin'])->group(function () {
    Route::get('/', Admin\AdminHome::class)->name('overview');
    Route::get('products', Admin\ProductComponent::class)->name('products');
    Route::get('brands', Admin\BrandComponent::class)->name('brands');
    Route::get('categories', Admin\CategoryComponent::class)->name('categories');
    Route::get('usermanagement', Admin\UserManagement::class)->name('manageuser');
}); 

Route::middleware(['auth:sanctum', 'verified', 'check_if_admin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


