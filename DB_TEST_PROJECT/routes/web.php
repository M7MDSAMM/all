<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// Route::prefix('categories')->group(function () {
//     Route::get('/',[CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/{id}',[CategoryController::class, 'show'])->name('categories.show');
//     Route::get('/{id}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
//     Route::post('/',[CategoryController::class, 'store'])->name('categories.store');
//     Route::put('/{id}',[CategoryController::class, 'update'])->name('categories.update');
//     Route::get('/create',[CategoryController::class, 'create'])->name('categories.create');
//     Route::delete('/{id}',[CategoryController::class,'delete'])->name('categories.delete');
// });

 Route::resource('categories',CategoryController::class);  
