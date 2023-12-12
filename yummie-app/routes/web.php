<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DaftarMenuController;


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
    return view('welcome');
});

Route::resource('daftarmenu', MenuController::class);
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');

Route::resource('stock', StockController::class);
//tasya
Route::get('buku_menu', [DaftarMenuController::class, 'index']);
