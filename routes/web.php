<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
$posts = [
    ['id' => 1, 'title' => 'Post 1', 'content' => 'Content 1'],
    ['id' => 2, 'title' => 'Post 2', 'content' => 'Content 2'],
    ['id' => 3, 'title' => 'Post 3', 'content' => 'Content 3'],
    ['id' => 4, 'title' => 'Post 4', 'content' => 'Content 4'],
    ['id' => 5, 'title' => 'Post 5', 'content' => '<h5>Content 5</h5>'],
];

Route::get('/', function () {
    // return view('home.index');
    phpinfo();
})->name('home.index');

Route::get('/posts', function () use ($posts) {

    return view('posts.index', ['posts' => $posts]);
})->name('posts.index');

Route::get('/post/create', function () {
    return view('posts.create');
})->name('posts.create');

Route::get('/post/{id?}', function ($id = 0) use ($posts) {
    if ($id == 0) {
        return redirect()->route('posts.index');
    }
    $id = intval($id) - 1;
    return view('posts.show', ['post' => $posts[$id]]);
})->name('posts.show');

Route::get('/post/{id}/edit', function ($id) {
    return '<h1>Post ' . $id . ' edit</h1>';
});

Route::put('/post/store', function () {
    return $_POST;
})->name('posts.store');