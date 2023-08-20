<?php

use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::prefix('/')->controller(WebController::class)->group(function () {
    Route::get('',      'home')->name('home');
    Route::get('index',      'index')->name('index');
    Route::get('calender',      'calender')->name('calender');
    Route::get('test',      'test')->name('test');
    //     Route::post ('/login',      'login')                    ->name('admin.login');
    //     Route::get  ('/logout',     'logout')                   ->name('admin.logout');
    //     Route::get  ('/register',   'showRegistrationForm')     ->name('admin.register');
    //     Route::post ('/register',   'register')                 ->name('admin.register');
    //     Route::get  ('/',           'home')                     ->name('admin.home');
});

Route::prefix('/project')->controller(WebController::class)->group(function () {
    Route::get('project',      'home')->name('home');
    //     Route::post ('/login',      'login')                    ->name('admin.login');
    //     Route::get  ('/logout',     'logout')                   ->name('admin.logout');
    //     Route::get  ('/register',   'showRegistrationForm')     ->name('admin.register');
    //     Route::post ('/register',   'register')                 ->name('admin.register');
    //     Route::get  ('/',           'home')                     ->name('admin.home');
});
