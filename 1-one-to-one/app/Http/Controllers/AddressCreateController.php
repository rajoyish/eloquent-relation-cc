<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressCreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('address.create');
    }
}
