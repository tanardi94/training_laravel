<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "This is About section of the web";
});

Route::get('/blog', 'PostController@index');

// Route::get('/blog/{id}', ['as' => 'post.detail', function($id) {
//     echo "<h1>This is post $id </h1>";
//     echo "<h2>This is the body of post $id</h2>";
//     echo '<a href="/blog">Return</a>';
// }]);

// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');

Route::resource('/post', 'PostController');