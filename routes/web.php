<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ComicsController;
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

Route::get('/',[PageController::class, 'index'])->name('home');

Route::get('/products', [PageController::class, 'products'])->name('products');

// col mome dell'entità alla base di tutte le nostre rotte resource
Route::resource('comics', ComicsController::class);



