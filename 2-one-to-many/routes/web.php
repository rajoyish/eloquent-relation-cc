<?php

use App\Http\Controllers\PostDestroyController;
use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostStoreController;
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

Route::get('/posts', PostIndexController::class);
Route::post('/posts', PostStoreController::class);
Route::delete('/posts/{post}', PostDestroyController::class);

Route::get('/', function () {
    return view('welcome');

    // $user = User::find(1);
    // dd($user->posts);
    // dd($user->posts->count());
    // foreach ($user->posts as $post) {
    // dump($post);
    // }
});

// Route::get('/create', function () {
//     $user = User::find(1);
//     $user->posts()->create([
//         'body' => 'St. Lucia'
//     ]);
// });

// ALTERNATIVE METHOD
// Route::get('/create/alt', function () {
//     $user = User::find(1);
//     $post = Post::make([
//         'body' => 'Costa Rica'
//     ]);
//     $user->posts()->save($post);
// });

// Route::get('/posts', function () {
//     $user = User::find(1);
//     // $posts = $user->posts()->get();
//     // dd($posts);
//     return view('posts.index', [
//         'posts' => $user->latestPosts
//     ]);
// });

// Route::get('/delete/{post}', function (Post $post) {
//     $user = User::find(1);
//     $user->posts()->find($post)->first()?->delete();
// });

// Route::get('/update/{post}', function (Post $post) {
//     $user = User::find(1);
//     $user->posts()->find($post)->first()->update([
//         'body' => 'Finland'
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
