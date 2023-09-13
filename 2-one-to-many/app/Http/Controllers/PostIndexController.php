<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $posts = $request->user()->posts()->latest()->get();

        return view('posts.index', [
            // Model scoped, the above method is also good, a user specific.
            // 'posts' => $request->user()->latestPosts

            // Listing everyone's post
            'posts' => Post::latest()->get(),
        ]);
    }
}
