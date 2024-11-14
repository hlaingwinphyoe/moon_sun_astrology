@extends('layouts.guest')

@section('content')
    <section class="container section-padding">
        <div class="row justify-content-center align-items-start">
            <div class="col-12 col-lg-3">
                @include('user.aside')
            </div>
            <div class="col-12 col-lg-9">
                <div class="contact-crev sub-bg pl-30 pr-30 pt-30 pb-30 radius-20">
                    <div class="mb-4">
                        <h5>Profile</h5>
                        <span class="text-black-50">Update Your Personal Details.</span>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success mb-4">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('profile.editInfo') }}" method="POST" class="row">
                        @csrf
                        @method('patch')
                        <div class="col-12">
                            <div class="form-group mb-30">
                                <label for="form_name" class="form-label">
                                    Name
                                </label>
                                <input value="{{ old('name', $user->name) }}" id="form_name" type="text" name="name"
                                    placeholder="Name" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for="form_email" class="form-label">
                                    Email
                                </label>
                                <input value="{{ old('email', $user->email) }}" id="form_email" type="text"
                                    name="email" placeholder="Email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for="form_phone" class="form-label">
                                    Phone
                                </label>
                                <input value="{{ old('phone', $user->phone) }}" id="form_phone" type="text"
                                    name="phone" placeholder="Phone" required>
                                @error('phone')
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
                                            {{ $gender->id == $user->gender_id ? 'selected' : '' }}>
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
                                            {{ $weekday->id == $user->weekday_id ? 'selected' : '' }}>
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
                        <div class="mt-10">
                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                <span class="text">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
