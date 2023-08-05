<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressPatchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->user()->address()->update([
            'line_1' => $request->line_1,
        ]);

        return redirect('address');
    }
}
