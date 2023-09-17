<?php

use App\Http\Controllers\ProfileController;
use App\Models\Post;
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
    // return view('welcome');

    $posts = Post::with('user')->latest()->get();

    return view('posts.index', [
        'posts' => $posts,
    ]);
});

Route::get('/create', function () {
    $user = User::find(1);
    $user->posts()->create([
        'body' => 'Another post',
    ]);
});

Route::get('/create/alt', function () {
    $user = User::find(1);

    $post = Post::make([
        'body' => 'Yet Another post',
    ]);

    $post->user()->associate($user);

    $post->save();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
