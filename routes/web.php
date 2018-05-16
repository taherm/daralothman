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

Route::get('/', function () {
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/instagram', function () {
    return view('instagram');
});

Route::get('/youtube', function () {
    return view('youtube');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/reserve-hall', function () {
    return view('reserve-hall');
});

Route::get('/quran-course', function () {
    return view('quran-course');
});

Route::get('/health-insurance', function () {
    return view('health-insurance');
});

Route::get('/assistance', function () {
    return view('assistance');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/versions', function () {
    return view('versions');
});
Route::get('/abdullah-othman', function () {
    return view('abdullah-othman');
});


Route::post('/send-mail','ContactController@send');