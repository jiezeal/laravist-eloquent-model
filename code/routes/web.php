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

Auth::loginUsingId(5);

Route::get('/', function () {
//    $post = \App\Post::find(2);
//    $comment = $post->comments()->create(['body'=>'use trait']);
//    return $comment;

//    $post = \App\Post::create([
//        'user_id' => Auth::id(),
//        'title' => 'trait title',
//        'body' => 'trait body'
//    ]);
//    return $post;

    $user = Auth::user();
    $activities = $user->activities;
    return $activities;
});
