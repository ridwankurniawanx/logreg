<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

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

Auth::routes(['login' => false],['register' => false]);

route::middleware('guest')->group(function(){
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',Register::class)->name('register');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
