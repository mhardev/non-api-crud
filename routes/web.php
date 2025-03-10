<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserInfoController;

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

Auth::routes();

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');


Route::prefix('user-info')->group(function () {
    Route::get('/', [UserInfoController::class, 'index'])->name('user-info');
    Route::get('/create', [UserInfoController::class, 'createUserInfo'])->name('create-user-info');
    Route::post('/save', [UserInfoController::class, 'saveUserInfo'])->name('save-user-info');
    Route::get('/{user_info}/show', [UserInfoController::class, 'showUserInfo'])->name('show-user-info');
    Route::get('/{user_info}/edit', [UserInfoController::class, 'editUserInfo'])->name('edit-user-info');
    Route::put('/{user_info}/update', [UserInfoController::class, 'updateUserInfo'])->name('update-user-info');
    Route::delete('/{user_info}/delete', [UserInfoController::class, 'deleteUserInfo'])->name('delete-user-info');
});
