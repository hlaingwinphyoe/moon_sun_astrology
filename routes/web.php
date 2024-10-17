<?php

use App\Http\Controllers\FrontController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/make-appointment', 'makeAppointment')->name('make-appointment');
    Route::get('/blogs/{slug}', 'blogDetails')->name('blogs.details');
});

require __DIR__ . '/admin.php';
