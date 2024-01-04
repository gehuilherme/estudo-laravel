<?php

use App\Http\Controllers\PatientsController;
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
Route::get('/patients', PatientsController::class .'@index')->name('patients.index');

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