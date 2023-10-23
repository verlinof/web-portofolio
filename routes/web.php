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

Route::get('/', [AuthenticationController::class, 'dashboard']);

Route::get('/login', function () {
    if(Auth::check()) {
        return redirect('/');
    }
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthenticationController::class, 'store']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::post('/logout', [AuthenticationController::class, 'logout']);