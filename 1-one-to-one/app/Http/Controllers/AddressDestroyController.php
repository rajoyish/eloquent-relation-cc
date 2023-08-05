<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->user()->address->delete();

        return redirect('/address');
    }
}
