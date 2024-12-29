<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\SystemInfoController;
use App\Http\Controllers\Admin\ZodiacController;
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

    Route::controller(SystemInfoController::class)->prefix('/system-infos')->name('system-infos.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/update-info', 'updateInfo')->name('update');
        Route::patch('/{info}/add-phone', 'addPhone')->name('addPhone');
        Route::delete('/{info}/delete-phone/{phone}', 'deletePhone')->name('deletePhone');
        // Route::patch('/{info}/upload-logo', 'uploadLogo')->name('uploadLogo');
    });

    // Bookings
    Route::controller(AppointmentController::class)->prefix('/bookings')->name('bookings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::patch('/{id}/{type}', 'update')->name('update');
    });

    // zodiac
    Route::resource('/zodiacs', ZodiacController::class)->except(['create', 'show', 'edit']);

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

    // Route::controller(ProfileController::class)->name('profile.')->group(function () {
    //     Route::get('/profile', 'edit')->name('edit');
    //     Route::patch('/profile', 'update')->name('update');
    //     Route::delete('/profile', 'destroy')->name('destroy');
    // });

    // staff & roles
    Route::resource('staffs', StaffController::class)->except(['create', 'show', 'edit']);
    Route::resource('banks', BankController::class)->except(['create', 'show', 'edit']);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
    Route::controller(StaffController::class)->prefix('/staffs')->name('staffs.')->group(function () {
        Route::patch('/{staff}/change-password', 'changePassword')->name('change-password');
        Route::delete('/{staff}/destroy-media', 'destroyMedia')->name('destroy-media');
    });
    Route::controller(BankController::class)->prefix('banks')->name('banks.')->group(function () {
        Route::patch('/{bank}/change-status', 'changeStatus')->name('change-status');
    });
});
