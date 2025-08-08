<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;
use App\Bag;

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
    return view('bag');
})->name('bag');

Route::post('/submit', [BagController::class, 'submit' ])->name('bag.submit');

Route::get('/semua', [BagController::class, 'tampil' ])->name('bag.tampil');
Route::get('/semua/{id}', [BagController::class, 'satuan' ]);

