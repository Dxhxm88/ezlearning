<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('pages.index');
})->name('index');

Route::get('/signup/student', function () {
    return view('signup');
})->name('student.signup');

Route::get('/signup/teacher', function () {
    return view('signup');
})->name('teacher.signup');

Route::get('/signup', function () {
    return view('opsignup');
})->name('signup');

Route::get('/homepage', function () {
    return view('pages.homepage');
})->name('homepage');


// Assessment
Route::get('/assessment/add', function () {
    return view('pages.assessment.assessment');
})->name('assessment.add');

Route::get('/assessment/view', function () {
    return view('pages.assessment.view');
})->name('assessment.view');

Route::get('/assessment/submission', function () {
    return view('pages.assessment.submission');
})->name('assessment.submission');


// Class
Route::get('/class/list', function () {
    return view('pages.class.view');
})->name('class.list');

Route::get('/class/add', function () {
    return view('pages.class.add');
})->name('class.add');

Route::get('/class/edit', function () {
    return view('pages.class.edit');
})->name('class.edit');

Route::get('/class/detail', function () {
    return view('pages.class.viewdetail');
})->name('class.detail');


// Subject
Route::get('/subject/list', function () {
    return view('pages.subject.view');
})->name('subject.list');

Route::get('/subject/add', function () {
    return view('pages.subject.add');
})->name('subject.add');

Route::get('/subject/edit', function () {
    return view('pages.subject.edit');
})->name('subject.edit');

// User
Route::get('/profile', function () {
    return view('pages.user.profile');
})->name('user.profile');

Route::get('/profile/edit', function () {
    return view('pages.user.edit');
})->name('user.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
