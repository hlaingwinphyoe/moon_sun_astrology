@extends('layouts.guest')

@section('content')
    <section class="container section-padding">
        <div class="row justify-content-center align-items-start">
            <div class="col-12 col-lg-3">
                @include('user.aside')
            </div>
            <div class="col-12 col-lg-9">
                <div class="sub-bg pl-30 pr-30 pt-30 pb-30 radius-20">
                    <div class="mb-4">
                        <h5>Appointments</h5>
                        <span class="text-black-50">Your Bookings List & Status.</span>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Book No.</th>
                                <th>Packages</th>
                                <th>Total Price</th>
                                <th>Booked Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $appointment)
                                <tr>
                                    <td class="py-3">{{ $appointment->appointment_no }}</td>
                                    <td class="py-3 whitespace-pre-wrap">{{ $appointment->getPackageNames() }}</td>
                                    <td class="py-3">
                                        <p class="badge bg-black fz-11">
                                            {{ $appointment->total_price }} Ks
                                        </p>
                                        <p class="badge bg-black fz-11">
                                            {{ $appointment->th_total_price }} THB
                                        </p>
                                    </td>
                                    <td class="py-3">
                                        {{ $appointment->created_at->format('d M, Y') }}
                                    </td>
                                    <td class="py-3">
                                        @if ($appointment->status->slug == 'finished')
                                            <p class="badge bg-success">
                                                {{ $appointment->status ? $appointment->status->name : '' }}</p>
                                        @else
                                            <p class="badge main-colorbg2">
                                                {{ $appointment->status ? $appointment->status->name : '' }}</p>
                                        @endif
                                    </td>
                                    <td class="py-3">
                                        <a href="">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="6">No Appointment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $appointments->appends(request()->query->all())->onEachSide(1)->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
@endsection
