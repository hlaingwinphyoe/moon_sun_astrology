<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Status;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    public function index()
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

    public function show($id)
    {
        $booking = Appointment::with(['user.gender', 'user.weekday', 'appointment_packages.package'])
            ->findOrFail($id);
        // dd($booking);
        return Inertia::render('Admin/Booking/Show', [
            'booking' => $booking
        ]);
    }

    public function update($id, $type)
    {
        $booking = Appointment::findOrFail($id);
        $incomplete = Status::isType('status')->where('slug', 'incomplete')->first();
        $approved = Status::isType('status')->where('slug', 'approved')->first();
        $finished = Status::isType('status')->where('slug', 'finished')->first();
        if ($type == 'incomplete') {
            $booking->update([
                'status_id' => $incomplete->id,
            ]);
        } else if ($type == 'approved') {
            $booking->update([
                'status_id' => $approved->id,
                'is_paid' => true
            ]);
        } else {
            $booking->update([
                'status_id' => $finished->id,
            ]);
        }

        return redirect()->route('admin.bookings.index')->with('success', 'Success');
    }
}
