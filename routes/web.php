<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

// Login
Route::get('/login', function () {
    return view('login.index');
});

// Patients
Route::get('/patients', function () {
    return view('patients.index');
});
Route::get('/patients/add', function () {
    return view('patients.forms.addpatient');
});
Route::put('/patients/edit/{id}', function () {
    return view('noway.index');
});
Route::delete('/administration/del/{id}', function ($id) {
    return $id;
});

// Administration
Route::get('/administration', function () {
    return view('administration.home');
});
Route::post('/administration/add', function () {
    return view('patients.forms.adduser');
});
Route::put('/administration/edit/{id}', function () {
    return view('noway.index');
});
Route::delete('/administration/del/{id}', function ($id) {
    return $id;
});

// No Way
Route::get('/no-way', function () {
    return view('noway.index');
});