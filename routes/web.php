<?php

use App\Http\Controllers\FrontController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/make-appointment', 'makeAppointment')->name('make-appointment');
    Route::get('/blogs', 'blogsList')->name('blogs.list');
    Route::get('/blogs/{slug}', 'blogDetails')->name('blogs.details');
    Route::get('/packages', 'packageList')->name('packages.list');
});

require __DIR__ . '/admin.php';
