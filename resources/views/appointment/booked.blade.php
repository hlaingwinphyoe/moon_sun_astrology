@extends('layouts.guest')

@section('content')
    <section class="contact-crev section-padding">
        <div class="container">
            <div class="row">
                <div class="text-center mb-40">
                    <h2 class="text-center">Payment</h2>
                    <h6 class="text-center text-black-50">You can pay with MMK or THB</h6>
                </div>
                <div class="col-lg-6">
                    <div class="order-form">
                        <h6 class="mb-20">Billing Details</h6>
                        <form action="{{ route('booked.payment', $appointment->appointment_no) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <span class="form-label">Payment Type</span>
                                    <div class="row">
                                        @foreach ($paymentypes as $paymentype)
                                            <div class="col-6 col-md-4">
                                                @include('components.payment-card')
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <label for="form_transaction_no" class="form-label">
                                            Transaction No.
                                        </label>
                                        <input value="{{ old('transaction_no') }}" id="form_transaction_no" type="text"
                                            name="transaction_no" placeholder="9999999999999999" required>
                                        @error('transaction_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-30">
                                        <label for="form_transaction_img" class="form-label">
                                            Transaction Image (Optional)
                                        </label>
                                        <input value="{{ old('transaction_img') }}" id="form_transaction_img" type="file"
                                            name="transaction_img">
                                        @error('transaction_img')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="butn butn-md butn-bg main-colorbg2 radius-30">
                                        <span class="text">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="checkout-order-info">
                        <h6 class="mb-20">Your Packages</h6>
                        <div>
                            <table class="table table-striped">
                                <tbody>
                                    @foreach ($appointment->appointment_packages as $appoint_pack)
                                        <tr>
                                            <td class="py-3">{{ $appoint_pack->package->name }}</td>
                                            <td class="py-3 fw-bold">{{ $appoint_pack->price }}
                                                {{ $appoint_pack->currency->name }}</td>
                                            <td class="py-3 fw-bold">{{ $appoint_pack->th_price }}
                                                {{ $appoint_pack->th_currency->name }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    {{-- <tr class="fw-bold">
                                            <td class="fz-16 py-3">Subtotal</td>
                                            <td class="py-3">{{ $appointment->total_price }} Ks</td>
                                            <td class="py-3">{{ $appointment->th_total_price }} ฿</td>
                                        </tr> --}}
                                    <tr class="fw-bold">
                                        <td class="fz-16 py-3">Total</td>
                                        <td class="fz-16 py-3">{{ $appointment->total_price }} Ks</td>
                                        <td class="fz-16 py-3">{{ $appointment->th_total_price }} ฿</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
