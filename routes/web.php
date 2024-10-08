<?php

use App\Http\Controllers\FrontController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontController::class, 'index'])->name('welcome');

Route::get('/blogs/1', function () {
    return Inertia::render("Site/Blogs/Details");
})->name('blogs.details');

require __DIR__ . '/admin.php';
