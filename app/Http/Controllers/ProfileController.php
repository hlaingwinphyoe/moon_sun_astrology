<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function bookingsList()
    {
        $user = Auth::user();

        if ($user) {
            $appointments = $user->appointments()->filterOn()->paginate(10);
            return view('user.bookings', compact('appointments', 'user'));
        } else {
            return redirect()->route('error');
        }
    }

    public function editProfile()
    {
        $user = Auth::user();
        if ($user) {
            $weekdays = Status::isType('weekdays')->orderBy('id', 'asc')->get();
            $genders = Status::isType('sex')->orderBy('id', 'asc')->get();
            return view('user.edit', compact('user', 'weekdays', 'genders'));
        } else {
            return redirect()->route('error');
        }
    }

    public function editInfo(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'nullable|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|digits:11|unique:users,phone,' . $user->id,
            'gender' => 'required|numeric|exists:statuses,id',
            'weekday' => 'required|numeric|exists:statuses,id',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender_id' => $request->gender,
            'weekday_id' => $request->weekday
        ]);

        return redirect()->back()->with('success', 'Profile Updated.');
    }

    public function changePassword()
    {
        $user = Auth::user();
        if ($user) {
            return view('user.change-password', compact('user'));
        } else {
            return redirect()->route('error');
        }
    }

    public function updatePassword(Request $request)
    {
        $currentUser = User::findOrFail(Auth::id());
        if ($currentUser) {
            $request->validate([
                'current_password' => 'required|string',
                'new_password' => 'required|string|min:8',
                'confirm_password' => 'required_with:new_password|same:new_password|min:8',
            ]);

            if (!$currentUser || !Hash::check($request->current_password, $currentUser->password)) {
                throw ValidationException::withMessages([
                    'current_password' => 'These credentials do not match our records.',
                ]);
            } else {
                $currentUser->password = bcrypt($request->new_password);
                $currentUser->update();

                // login again
                Auth::logout();
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('error');
        }
    }
}
