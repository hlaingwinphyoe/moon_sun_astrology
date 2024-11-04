@extends('layouts.guest')

@section('content')
    <section class="section-padding header-creative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card" style="border-radius: 30px">
                        <div class="card-body text-center" style="padding: 40px">
                            <h1 class="ls1 mb-25">
                                <i class="fa fa-check-circle"></i>
                            </h1>
                            <h4 class="ls1 mb-10">Successfully Booked.</h4>
                            <p class="mb-30">Wait for the response within  24 hours</p>
                            <a href="{{ route('welcome') }}" class="butn butn-md butn-bg text-white bg-black radius-30">
                                <span>View Your Bookings</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-1.png') }}">
        </div>
    </section>
@endsection
