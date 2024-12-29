<?php

namespace App\Http\Middleware;

use App\Models\SystemInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $user = $request->user();

        $notifications = $user ? $user->unreadNotifications()
            ->latest()
            ->take(10)
            ->get() : null;

        $count = $user ? $user->unreadNotifications()->count() : 0;

        $route = url()->current();

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'system_info' => SystemInfo::with('phones')->first(),
            'notifications' => $notifications,
            'noti_count' => $count,
            'current_route' => $route,

            'app_name' => config('app.name'),

            'previous' => fn() => URL::previous(),

            'flash' => [
                'success' => fn() => $request->session()->get('success'),
                'error' => fn() => $request->session()->get('error'),
                'warning' => fn() => $request->session()->get('warning'),
                'info' => fn() => $request->session()->get('info'),
            ],
        ]);
    }
}
