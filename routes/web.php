<?php

Route::view('welcome', 'welcome');
Route::get('/', 'PostController@index')->name('post.index');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');

Route::get('search',"PostController@search")->name('post.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/tags/{tag}','TagController@index');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

