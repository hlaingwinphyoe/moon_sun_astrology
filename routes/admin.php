<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'admin'
    // 'verified',
])->prefix('admin')->name('admin.')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // Package
    Route::resource('/packages', PackageController::class)->except(['create', 'show', 'edit']);
    Route::patch('/packages/{package}/change-status', [PackageController::class, 'changeStatus'])->name('packages.change-status');

    // Item
    Route::resource('/items', ItemController::class)->except(['create', 'show', 'edit']);
    Route::controller(ItemController::class)->prefix('items')->name('items.')->group(function () {
        Route::delete('/{item}/destroy-media', 'destroyMedia')->name('destroy-media');
        Route::patch('/{item}/change-status', 'changeStatus')->name('change-status');
    });

    // Reading Post
    Route::resource('/categories', CategoryController::class)->except(['create', 'show', 'edit']);
    Route::resource('/posts', PostController::class)->except(['create', 'show', 'edit']);
    Route::controller(PostController::class)->prefix('posts')->name('posts.')->group(function () {
        Route::patch('/{post}/change-status', 'changeStatus')->name('change-status');
    });

    Route::controller(NotificationController::class)->group(function () {
        Route::get('/notifications/lists', 'index')->name('notifications.lists');
        Route::patch('/mark-as-read/{notification}', 'markAsRead')->name('mark-as-read');
        Route::delete('/readallnotifications', 'readall')->name('readallnotifications');
    });

    Route::controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/profile', 'edit')->name('edit');
        Route::patch('/profile', 'update')->name('update');
        Route::delete('/profile', 'destroy')->name('destroy');
    });

    // staff & roles
    Route::resource('staffs', StaffController::class)->except(['create', 'show', 'edit']);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
    Route::controller(StaffController::class)->prefix('/staffs')->name('staffs.')->group(function () {
        Route::patch('/{staff}/change-password', 'changePassword')->name('change-password');
        Route::delete('/{staff}/destroy-media', 'destroyMedia')->name('destroy-media');
    });
});
