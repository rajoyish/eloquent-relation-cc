<?php

use App\Models\Discussion;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('discussions.index', [
        'discussions' => Discussion::with('latestPost.user')->latest()->get(),
    ]);
});

Route::get('/most-voted', function () {
    $user = User::find(2);
    dd($user->mostVotedPost);
});
