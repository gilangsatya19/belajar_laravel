<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ObatController;
use app\Http\Controllers\Lat2Controller;
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

Route::resource('product', ProductController::class);

Route::get('/lat1', [Lat1Controller::class, 'index']);

Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);

Route::get('/obat/index', [ObatController::class, 'index'])->name('index.obat');
Route::get('/obat/create', [ObatController::class, 'create'])->name('create.obat');
Route::post('/obat/store', [ObatController::class, 'store'])->name('store.obat');
Route::get('/obat/edit/{id}', [ObatController::class, 'edit'])->name('edit.obat');
Route::post('/obat/update/{id}', [ObatController::class, 'update'])->name('update.obat');
Route::get('/obat/delete/{id}', [ObatController::class, 'delete'])->name('delete.obat');



