<div class="">
    <div class="text-center">
        <img src="/user.png" class="mb-2 p-2 border circle border-primary" style="width:110px;height:110px;" alt="">
        <h4>{{ $user->name }}</h4>
    </div>
    <ul class="mt-4 sub-bg radius-20 py-2">
        <li class="py-3 px-2">
            <a href="{{ route('profile.bookings.list') }}"
                class="{{ request()->routeIs('profile.bookings.list') ? 'main-color2' : '' }}">
                <i class="fas fa-list me-2"></i>Your Bookings
            </a>
        </li>
        {{-- <li class="py-3 px-2">
            <a href="">
                <i class="fas fa-heart me-2"></i>Saved Articles
            </a>
        </li> --}}
        <li class="py-3 px-2">
            <a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'main-color2' : '' }}">
                <i class="fas fa-edit me-2"></i>Edit Profile
            </a>
        </li>
        <li class="py-3 px-2">
            <a href="{{ route('profile.changePassword') }}"
                class="{{ request()->routeIs('profile.changePassword') ? 'main-color2' : '' }}">
                <i class="fas fa-lock me-2"></i>Change Password
            </a>
        </li>
    </ul>
</div>
