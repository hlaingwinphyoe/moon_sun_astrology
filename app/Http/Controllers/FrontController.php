<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Package;
use App\Models\Post;
use App\Models\Zodiac;
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
            ->take(4);

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

        $zodiacs = Zodiac::orderBy('id', 'asc')->get();

        return view('front', [
            'packages' => $packages,
            'posts' => $posts,
            'zodiacs' => $zodiacs,
        ]);
    }

    public function makeAppointment()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            // return view()
        }
    }

    public function blogsList()
    {
        $post = Post::with(['category', 'user'])
            ->published()
            ->orderBy('id', 'desc')
            ->first();

        $posts = Post::query()
            ->with(['category', 'user'])
            ->filterOn()
            ->orderBy('id', 'desc')
            ->where('id', '!=', $post->id)
            ->paginate(12)
            ->withQueryString();

        return view('blogs.index', compact('posts', 'post'));
    }

    public function packageList()
    {
        $packages = Package::query()
            ->with(['astrologer', 'currency'])
            ->filterOn()
            ->orderBy('id', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('packages.index', compact('packages'));
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
                ->take(3);

            return view('blogs.details', compact('post', 'recentPosts'));
        } else {
            return view('composables.404');
        }
    }
}
