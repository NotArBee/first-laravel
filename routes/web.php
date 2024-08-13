<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home Page',
        'nama' => 'Muhammad Dani Arya Putra'
    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About Page',
            'nama' => 'Muhammad Dani Arya Putra',
            'jurusan' => 'Sistem Informasi'
        ]
    );
});

Route::get('posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', [
        'title' => 'Detail Article',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view(
        'contact',
        [
            'title' => 'Contact Page',
            'nama' => 'Muhammad Dani Arya Putra',
            'email' => 'daniaryap01@gmail.com',
            'instagram' => '@daniarya_p'
        ]
    );
});
