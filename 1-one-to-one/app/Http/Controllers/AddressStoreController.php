<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->user()->address()->create($request->only('line_1'));

        return redirect('/address');
    }
}
