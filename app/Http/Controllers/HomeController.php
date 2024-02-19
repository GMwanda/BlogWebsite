<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $featuredPosts = Cache::remember('featuredPosts', Carbon::now()->addDay(), function () {
            return Post::published()->featured()->latest('published_at')->take(3)->get();
        });



        $latestPosts = Cache::remember('latestPosts', Carbon::now()->addDay(), function () {
            return Post::published()->featured()->latest('published_at')->take(9)->get();
        });


        return view('welcome', [
            'featuredPosts' => $featuredPosts,
            'latestPosts' => $latestPosts
        ]);
    }
}
