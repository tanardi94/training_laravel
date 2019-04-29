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

Route::get('/insert', function() {
    $data = [
        'title' => 'Contoh insert judul berita',
        'body' => 'ini adalah contoh insert body dari berita dengan tipe data teks',
        'user_id' => 2
    ];
    DB::table('posts')->insert($data);
    echo 'data berhasil disimpan';
});

Route::get('/read', function() {
    $query = DB::table('posts')->select('title','body')->where('id',1)->get();
    echo '<pre>';
    print_r($query);
    echo '</pre>';
});

Route::resource('/post', 'PostController');