<?php

use App\Http\Controllers\ProfileController;
use App\Models\Course;
use App\Models\Topic;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/courses', function () {
    $courses = Course::with('topics')->latest()->get();
    // dd($courses->first()->topics);

    return view('courses.index', [
        'courses' => $courses,
    ]);
});

Route::get('/attach', function () {
    $course = Course::find(10);
    $topic = Topic::find(2);

    $course->topics()->attach($topic);
});

Route::get('/attach-many', function () {
    $course = Course::find(3);
    $topics = Topic::get(); // collection
    // $course->topics()->attach([1, 2, 3, 4, 5]);
    $course->topics()->attach($topics);
});

Route::get('/detach-many', function () {
    $course = Course::find(2);
    // $course->topics()->detach([3, 4, 5]);

    $topics = Topic::get(); // collection
    $course->topics()->detach($topics);
});

Route::get('/courses/{course}/topics', function (Course $course, Request $request) {
    return view('courses.topics', [
        'topics' => Topic::get(),
        'course' => $course,
    ]);
});

Route::post('/courses/{course}/topics', function (Course $course, Request $request) {
    // $course->topics()->attach(Topic::findOrFail($request->topic_id), [
    //     'version' => $request->version
    // ]);
    $course->topics()->syncWithoutDetaching([$request->topic_id => [
        'version' => $request->version,
    ]]);
})->name('courses.topics.name');

Route::get('/detach', function () {
    $course = Course::find(2);
    $topic = Topic::find(11);

    $course->topics()->detach($topic);
});

Route::get('/topics/{topic:slug}', function (Topic $topic, Request $request) {
    // $courses = $topic->courses()->with('topics')->wherePivot('version', '=', $request->version)->get();

    // same functionality as the above but cleaner way. You need to change the view file as well
    $topic->load([
        'courses' => function ($query) use ($request) {
            $query->with('topics')
                ->wherePivot('version', '=', $request->version);
        },
    ]);

    return view('topics.show', [
        'topic' => $topic,
        // Uncomment the below to work on first method
        // 'courses' => $courses
    ]);
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
