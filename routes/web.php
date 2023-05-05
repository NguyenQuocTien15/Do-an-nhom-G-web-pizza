<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
use App\Models\Bill;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/welcome', [ProductController::class, 'index']);

// Tâm An
Route::get('/tracking', [BillController::class, 'index']);
Route::get('/tracking/{slug}/{id_status}', [BillController::class, 'show'])->name('tracking_custom');

// Test 123123123
Route::get('/tracking/test', [BillController::class, 'index']);



