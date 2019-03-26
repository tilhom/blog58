<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/post', function () {
    return view('frontend.post');
});
