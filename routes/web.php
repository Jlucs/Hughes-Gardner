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
    return view('welcome');
});

Route::get('/services', function () {
    return view('services.index');
});

Route::get('/services/office-and-commercial', function () {
    return view('services.office-and-commercial');
});

Route::get('/services/window-cleaning', function () {
    return view('services.window-cleaning');
});

Route::get('/services/carpet-and-floor', function () {
    return view('services.carpet-and-floor');
});

Route::get('/services/covid-sanitation-services', function () {
    return view('services.covid-sanitation-services');
});

Route::get('/services/frequently-requested', function () {
    return view('services.frequently-requested');
});

Route::get('/services/washroom-supplies', function () {
    return view('services.washroom-supplies');
});

Route::get('/services/waste-management', function () {
    return view('services.waste-management');
});

Route::get('/services/extra-services', function () {
    return view('services.extra-services');
});

Route::get('/services/IT-cleaning', function () {
    return view('services.it-cleaning');
});


Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/about-us', function () {
    return view('about.index');
});

Route::get('/careers', function () {
    return view('careers.index');
});

Route::get('/green-cleaning', function () {
    return view('misc.green-cleaning');
});

Route::get('/awards-and-recognition', function () {
    return view('misc.awards-and-recognition');
});

Route::get('/pandemic-preventative-measures', function () {
    return view('misc.pandemic-preventative-measures');
});

Route::get('/multi-site-contracts-and-standalone-clients', function () {
    return view('misc.multi-site-contracts-and-standalone-clients');
});

Route::get('/waste-and-recycling', function () {
    return view('misc.waste-and-recycling');
});
