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
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashbord.index');

Route::get('/dashboard/appointment/create', function () {
    return view('dashboard.appointment.create');
})->name('dashbord.appointment.create');

// add appointment to line
Route::get('/dashboard/appointment/{id}/add-line', function () {
    return view('dashboard.appointment.add-line');
})->name('dashbord.appointment.add_line');
