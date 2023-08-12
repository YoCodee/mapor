<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/detail', [PageController::class, 'detail'])->name('detail');
Route::get('/add', [PageController::class, 'add'])->name('add');
Route::post('/add', [PageController::class, 'addProses'])->name('addProses');

Route::get('/news/{slug}', [PageController::class, 'detailInfo'])->name('detailInfo');
