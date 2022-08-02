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
Route::get('/listing', function () {
    return view('listing');
});
Route::get('/property', function () {
    return view('property');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/add-property', function () {
    return view('add-property');
});
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/favorited-listings', function () {
    return view('favorited-listings');
});
Route::get('/my-listings', function () {
    return view('my-listings');
});
Route::get('/user-profile', function () {
    return view('user-profile');
});
Route::get('/agents', function () {
    return view('agents');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
