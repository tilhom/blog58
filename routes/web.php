<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/post', function () {
    return view('frontend.post');
});
