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
                        <h5>Change Password</h5>
                        <span class="text-black-50">Change your password for more secure.</span>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success mb-4">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('profile.updatePassword') }}" method="POST" class="row">
                        @csrf
                        @method('patch')
                        <div class="col-12">
                            <div class="form-group mb-30">
                                <label for="form_current_password" class="form-label">
                                    Current Password
                                </label>
                                <input id="form_current_password" type="password" name="current_password"
                                    placeholder="Current Password" required>
                                @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-30">
                                <label for="form_new_password" class="form-label">
                                    New Password
                                </label>
                                <input id="form_new_password" type="password" name="new_password"
                                    placeholder="New Password" required>
                                @error('new_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-30">
                                <label for="form_confirm_password" class="form-label">
                                    Confirm Password
                                </label>
                                <input id="form_confirm_password" type="password" name="confirm_password"
                                    placeholder="Confirm Password" required>
                                @error('confirm_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                <span class="text">Change</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
