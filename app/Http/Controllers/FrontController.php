<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Package;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        $packages = Package::with(['astrologer', 'currency'])
            ->latest()
            ->get()
            ->take(3);

        // $posts = PostResource::collection(Cache::remember('posts', 60, function () {
        //     return Post::with(['category', 'user'])
        //         ->latest()
        //         ->get()
        //         ->take(6);
        // }));

        $posts = Post::with(['category', 'user'])
            ->published()
            ->latest()
            ->get()
            ->take(6);

        return view('front', [
            'packages' => $packages,
            'posts' => $posts
        ]);
    }

    public function makeAppointment()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            dd('login');
        }
    }

    public function blogDetails($slug)
    {
        $post = Post::with(['category', 'user'])
            ->where('slug', $slug)
            ->firstOrFail();

        if ($post) {
            $recentPosts = Post::with(['category', 'user'])
                ->where('category_id', $post->category_id)
                ->where('id', '!=', $post->id)
                ->inRandomOrder()
                ->get()
                ->take(2);

            return view('blogs.details', compact('post', 'recentPosts'));
        } else {
            return view('composables.404');
        }
    }
}
