<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/', [AuthenticationController::class, 'dashboard'])->name('dashboard');

Route::get('/login', function () {
    if(Auth::check()) {
        return redirect('dashboard');
    }
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthenticationController::class, 'store']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::post('/logout', [AuthenticationController::class, 'logout']);

Route::get('/profile', [AuthenticationController::class, 'profile']);

Route::delete('/delete', [AuthenticationController::class, 'destroy'])->name('delete-account');

Route::get('/edit', [AuthenticationController::class, 'edit'])->name('edit-account');

Route::post('/update', [AuthenticationController::class, 'update'])->name('update-account');