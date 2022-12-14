<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', [PoliController::class, 'index']);
// Route::get('/', [DokterController::class, 'index']);
Route::get('/', [PageController::class, 'index']);
Route::get('/admin', [PageController::class, 'admin']);
