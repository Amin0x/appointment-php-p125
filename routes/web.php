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



Route::get('/dashboard/contact-us', function () {
    return view('dashboard.contact-us');
})->name('dashboard.contact_us');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashbord.index');

Route::get('/dashboard/doctor', function () {
    return view('dashboard.doctor.index');
})->name('dashbord.doctor.index');

Route::get('/dashboard/doctor/create', function () {
    return view('dashboard.doctor.create');
})->name('dashbord.doctor.create');

Route::get('/dashboard/appointment/', function () {
    return view('dashboard.appointment.list');
})->name('dashbord.appointment.index');

Route::get('/dashboard/appointment/create', function () {
    return view('dashboard.appointment.create');
})->name('dashbord.appointment.create');

// add appointment to line
Route::get('/dashboard/appointment/{id}/add-line', function () {
    return view('dashboard.appointment.add-line');
})->name('dashbord.appointment.add_line');

//Route::get('/{any}', 'SiteController@index')->where('any', '^(?!api).*$');
Route::get('/{any}', function(){return view('welcome');})->where('any', '^(?!api).*$');

Route::get('/login', function () {
    return view('forentend.index');
})->name('login');


Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/register', function () {
    return view('forentend.register');
})->name('register');

Route::get('/appointments/add', function () {
    return view('forentend.add-appointment');
})->name('add-appointment');


