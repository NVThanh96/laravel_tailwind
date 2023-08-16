<?php

use App\Http\Controllers\WebController;
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
Route::get('/index', [WebController::class, 'index']);


 Route::prefix('')->controller(WebController::class)->group(function () {
     Route::get  ('index',      'index')            ->name('index');
//     Route::post ('/login',      'login')                    ->name('admin.login');
//     Route::get  ('/logout',     'logout')                   ->name('admin.logout');
//     Route::get  ('/register',   'showRegistrationForm')     ->name('admin.register');
//     Route::post ('/register',   'register')                 ->name('admin.register');
//     Route::get  ('/',           'home')                     ->name('admin.home');
 });