<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        try {
            DB::enableQueryLog(); // Enable query logging

            $categories = Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(15)->get();

            return view('posts.index', compact('categories'));
        } catch (\Exception $e) {
            // Handle any exceptions or errors
            return $e->getMessage(); // You can replace this with a proper error handling mechanism
        }
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
