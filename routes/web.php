<?php
Route::get('/', 'PostController@index')->name('post.index');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
