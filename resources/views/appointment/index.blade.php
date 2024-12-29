@extends('layouts.guest')

@section('content')

    <header class="page-header section-padding pb-0 header-creative">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Our Services</h6>
                        <h1 class="fz-80">Make Appointment</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-1.png') }}">
        </div>
    </header>

    <section class="contact-crev section-padding sub-bg">
        <form id="appointment-form" method="post" action="{{ route('make-appointment.store') }}">
            @csrf
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="controls row">
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label for="form_dob" class="form-label">
                                        Dirth of Birth
                                    </label>
                                    <input value="{{ old('dob', auth()->user()->dob) }}" id="form_dob" type="date"
                                        name="dob" placeholder="Dirth of Birth" required>
                                    @error('dob')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label for="form_email" class="form-label">
                                        Email (Optional)
                                    </label>
                                    <input value="{{ old('email', auth()->user()->email) }}" id="form_email" type="email"
                                        name="email" placeholder="Email">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label for="form_gender" class="form-label">
                                        Genders
                                    </label>
                                    <select id="form_gender" name="gender" required>
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->id }}"
                                                {{ $gender->id == auth()->user()->gender_id ? 'selected' : '' }}>
                                                {{ $gender->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('gender')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <label for="form_weekday" class="form-label">
                                        Weekdays
                                    </label>
                                    <select id="form_weekday" name="weekday" required>
                                        @forelse ($weekdays as $weekday)
                                            <option value="{{ $weekday->id }}"
                                                {{ $weekday->id == auth()->user()->weekday_id ? 'selected' : '' }}>
                                                {{ $weekday->name }}
                                            </option>
                                        @empty
                                            <option value="0">No Data.</option>
                                        @endforelse
                                    </select>
                                    @error('weekday')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-30">
                                    <label for="form_social" class="form-label">
                                        Social Acc (Fb,Telegram,Viber)
                                    </label>
                                    <input value="{{ old('social', auth()->user()->social_link) }}" id="form_social"
                                        type="text" name="social" placeholder="Social Acc Name" required>
                                    @error('social')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="form_desc" class="form-label">
                                        Description
                                    </label>
                                    <textarea id="form_desc" name="desc" placeholder="Say smth that you wanna know" rows="4" required>{{ old('desc') }}</textarea>
                                    @error('desc')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mt-30">
                                    <button type="submit" class="butn butn-md butn-bord radius-30">
                                        <span class="text">Book Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <span class="form-label ms-lg-2">Packages</span>
                            @foreach ($packages as $package)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="checkbox" value="{{ $package->id }}" class="btn-check"
                                            id="package-{{ $package->id }}" name="packages[]"
                                            {{ in_array($package->id, old('packages[]', [])) ? 'checked' : '' }}>
                                        <label class="btn btn-outline-dark mb-4" for="package-{{ $package->id }}">
                                            <div style="height: 120px" class="p-2 text-center radius-5">
                                                <p class="badge main-colorbg2">
                                                    {{ $package->price }}
                                                    {{ $package->currency ? $package->currency->name : 'Ks' }}
                                                </p>
                                                <p class="badge bg-dark">
                                                    {{ $package->th_price }}
                                                    {{ $package->th_currency ? $package->th_currency->name : '฿' }}
                                                </p>
                                                <h6 class="fz-12 mb-0 mt-2">
                                                    {{ $package->name }}
                                                </h6>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                            @error('packages')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @error('packages.*')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>

@endsection
