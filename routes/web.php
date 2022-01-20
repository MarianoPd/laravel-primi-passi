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
        'activities' => [
            "activity 1",
            "activity 2",
            "activity 3",
            "activity 4",
            "activity 5",
        ],
        'jumboImg' => "https://files.realpython.com/media/13-Python-Projects-for-Intermediate-Developers_Watermarked.bb98d44bdb10.jpg"
    ];


    return view('home',$data);
})->name('home');
Route::get('/about', function () {
    $data = [
        'activities' => [
            "activity 1",
            "activity 2",
            "activity 3",
            "activity 4",
            "activity 5",
        ],
    ];
    return view('about', $data);
})->name('about');
Route::get('/projects', function () {
    $data = [
        'images' =>[
            'https://content.instructables.com/ORIG/FZ9/V0OG/J0MEP2823I2/FZ9V0OGJ0MEP2823I2.jpg?auto=webp&frame=1&width=525&fit=bounds&md=9f7dd252d487671f554b9f83ec8ed3ee',
            'https://content.instructables.com/ORIG/FZW/J3YX/7YVEP28239P/FZWJ3YX7YVEP28239P.jpg?auto=webp&frame=1&fit=bounds&md=f38114a2021a81ee912c72c3e9c76264',
            'https://www.boredpanda.com/blog/wp-content/uploads/2018/02/0rDYRY3vezWwMCHUwu8v-zLG4ZX40MfMPsjdFJJh9zo-5a7d7bab1be4b__700.jpg',
            'https://www.boredpanda.com/blog/wp-content/uploads/2018/02/unbelievable-diy-projects-16-5a7484fe7014e__700.jpg'
        ]
    ];
    return view('projects', $data);
})->name('projects');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
