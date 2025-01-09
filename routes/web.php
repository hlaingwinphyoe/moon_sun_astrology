<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/make-appointment', 'makeAppointment')->name('make-appointment');
    Route::post('/make-appointment', 'makeAppointmentStore')->name('make-appointment.store');
    Route::get('/blogs', 'blogsList')->name('blogs.list');
    Route::get('/blogs/{slug}', 'blogDetails')->name('blogs.details');
    Route::get('/packages', 'packageList')->name('packages.list');

    // page routes
    Route::get('/booked', 'bookedCompleted')->name('booked.completed');
    Route::post('booked/{booked}/payment', 'bookedPayment')->name('booked.payment');
});

Route::controller(ProfileController::class)->prefix('profile/')->name('profile.')->group(function () {
    Route::get('/bookings', 'bookingsList')->name('bookings.list');
    Route::get('/edit', 'editProfile')->name('edit');
    Route::get('/change-password', 'changePassword')->name('changePassword');
    Route::patch('/update-password', 'updatePassword')->name('updatePassword');
    Route::patch('/edit-info', 'editInfo')->name('editInfo');
});

Route::get('/error-page', function () {
    return view('components.error');
})->name('error');

Route::fallback(function () {
    return response()->view('components.error', [], 404);
});

require __DIR__ . '/admin.php';
