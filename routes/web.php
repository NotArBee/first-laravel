<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home Page',
        'nama' => 'Muhammad Dani Arya Putra'
    ]);
});

Route::get('/about', function () {
    return view('about', 
    [
        'title' => 'About Page',
        'nama' => 'Muhammad Dani Arya Putra',
        'jurusan' => 'Sistem Informasi'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog Page'
    ]);
});

Route::get('/contact', function () {
    return view('contact', 
    [
        'title' => 'Contact Page',
        'nama' => 'Muhammad Dani Arya Putra',
        'email' => 'daniaryap01@gmail.com',
        'instagram' => '@daniarya_p'
    ]);
});
