<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        return view('address.index', [
            'user' => $request->user(),
        ]);
    }
}
