<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'home']);
Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('blog',[UserController::class,'blog'])->name('blog');
Route::get('/blogdetails',[UserController::class,'blogdetails'])->name('blogdetails');
Route::get('/error',[UserController::class,'error'])->name('error');
Route::get('/contact',[UserController::class,'contact'])->name('contect');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');

// Route::get('/', function () {
//     return view('layouts.main');
// });

// Route::get('/', function () {
//     return view('layouts.main');
// });

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/blog', function () {
//     return view('pages.blog');
// });

// Route::get('/blogdetails', function () {
//     return view('pages.blog-details');
// });

// Route::get('/error', function () {
//     return view('pages.error');
// });

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

// Route::get('/login', function () {
//     return view('pages.login');
// });
// Route::get('/register', function () {
//     return view('pages.register');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
