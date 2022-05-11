<?php

use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('home');
        Route::resource('event', EventsController::class)->except(['show']);
        Route::resource('profile', ProfilesController::class)->except(['show']);
        Route::resource('media', MediaController::class)->except(['show']);
        Route::post('/administrator/{administrator}/change-password', [AdministratorsController::class, 'changePassword'])
            ->name('administrator.change_password');
        Route::resource('administrator', AdministratorsController::class)->except(['show']);
    });

    Route::get('/login', [AuthController::class, 'loginView'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'loginPost']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
