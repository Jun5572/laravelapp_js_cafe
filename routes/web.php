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
    return view('top');
});

Route::get('/menu', function() {
    return view('menu');
});


Route::get('/news', function() {
    return view('news/news');
});
Route::get('/news/show', function() {
    return view('news/news_detail');
});


Route::get('/concept', function() {
    return view('concept');
});


Route::get('/contact', function() {
    return view('contact/contact');
});


Route::get('/confirm', function() {
    return view('contact/confirm');
});


Route::get('/contact/thanks', function() {
    return view('contact/thanks');
});


Route::get('/recruit', function() {
    return view('recruit');
});


Route::get('/plivacy_policy', function() {
    return view('plivacy_policy');
});