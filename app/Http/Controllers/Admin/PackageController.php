<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class PackageController extends Controller
{
    public function index()
    {
        $pageSize = request('page_size') ?: 10;
        $packages = Package::query()
            ->with('astrologer')
            ->filterOn()
            ->latest()
            ->paginate($pageSize)
            ->withQueryString()
            ->through(fn($package) => [
                'id' => $package->id,
                'name' => $package->name,
                'price' => $package->price,
                'astrologer' => $package->astrologer ? $package->astrologer->name : '',
                'astrologer_id' => $package->astrologer_id,
                'created_at' => $package->created_at->diffForHumans(),
                'disabled' => $package->disabled,
            ]);

        $astrologers = User::astrologer()->get();

        return Inertia::render('Admin/Package/Index', [
            'packages' => $packages,
            'astrologers' => $astrologers
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:packages,name',
            'price' => 'required|numeric|min:50',
            'astrologer' => 'required|numeric|exists:users,id'
        ]);

        $data = DB::transaction(function () use ($request) {
            $package = Package::create([
                'name' => $request->name,
                'price' => $request->price,
                'astrologer_id' => $request->astrologer,
            ]);
        });

        return redirect()->back()->with('success', 'Successfully Created.');
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string|unique:packages,name,' . $package->id,
            'price' => 'required|numeric|min:50',
            'astrologer' => 'required|numeric|exists:users,id'
        ]);

        $data = DB::transaction(function () use ($request, $package) {
            $package->update([
                'name' => $request->name,
                'price' => $request->price,
                'astrologer_id' => $request->astrologer,
            ]);
        });

        return redirect()->back()->with('success', 'Successfully Updated.');
    }

    public function changeStatus(Package $package)
    {
        $data = DB::transaction(function () use ($package) {
            if ($package->disabled === 0) {
                $package->update(['disabled' => 1]);
            } else {
                $package->update(['disabled' => 0]);
            }
        });

        return redirect()->back()->with('success', 'Successfully Updated.');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->back()->with('success', 'Successfully Deleted.');
    }
}
