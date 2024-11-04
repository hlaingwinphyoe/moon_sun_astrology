<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    public function bookingsList()
    {
        $pageSize = request('page_size') ?: 10;
        $bookings = Appointment::query()
            ->with(['user'])
            ->filterOn()
            ->latest()
            ->paginate($pageSize)
            ->withQueryString()
            ->through(fn($booking) => [
                'id' => $booking->id,
                'appointment_no' => $booking->appointment_no,
                'customer_name' => $booking->user ? $booking->user->name : '',
                'customer_age' => $booking->user ? $booking->user->dob : '',
                'is_paid' => $booking->is_paid,
                'book_packages' => $booking->appointment_packages,
                'desc' => $booking->desc,
                'total_price' => $booking->total_price,
                'status' => $booking->status ? $booking->status->name : '',
                'created_at' => $booking->created_at->format('d M, Y'),
            ]);

        return Inertia::render('Admin/Booking/Index', [
            'bookings' => $bookings
        ]);
    }
}
