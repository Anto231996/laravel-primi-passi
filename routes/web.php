<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'title' => 'Hello World',
        'links' =>[
            [
                'link' => 'Home',
                'url' => 'home'
            ],

            [
                'link' => 'About',
                'url' => 'about'
            ],

            [
                'link' => 'Blogs',
                'url' => 'blogs'
            ],

            [
                'link' => 'Contacts',
                'url' => 'contacts'
            ]
        ]

    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');