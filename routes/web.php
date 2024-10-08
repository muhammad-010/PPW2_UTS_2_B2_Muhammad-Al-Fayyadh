<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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
    return redirect('/products');
});
Route::resource('products', ProductController::class);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'] )->name('products.destroy');
Route::put('/products/edit/{id}', [ProductController::class, 'edit'] )->name('products.edit');
Route::put('/products/update/{id}', [ProductController::class, 'update'] )->name('products.update');
