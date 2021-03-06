<?php

use App\Http\Controllers\ApplicantController;
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

Route::get('/apply', function () {
    return view('applicants.login');
});

Route::get('/show', function () {
    return view('admin.applicants.show');
})->name('applicantsShow');

Route::get('/applicants.dashboard', function () {
    return view('applicants.dashboard');
})->name('applicantsDashboard');

Route::get('admin.dashboard', function () {
    return view('admin.dashboard');
});
Route::get('admin.applicants', function () {
    return view('admin.applicants.index');
});
Route::resource('applicants', ApplicantController::class);