<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'body' => ['required'],
        ]);

        $request->user()->posts()->create([
            'body' => $request->body,
        ]);

        return back();
    }
}
