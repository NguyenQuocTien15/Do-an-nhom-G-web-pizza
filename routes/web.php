<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('viewuser', [CustomAuthController::class, 'show']);
Route::get('changeuser', [CustomAuthController::class, 'btnchageuser']);


// admin
Route::prefix('admin')->group(function () {
    // list of user
    Route::get('/list-of-users',[AdminController::class,'index'])->name('list.user');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.delete');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}/update', [UserController::class, 'update'])->name('users.update');
 });

 