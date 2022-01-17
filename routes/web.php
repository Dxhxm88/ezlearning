<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\Teacher\RegisterController;
use App\Http\Controllers\Auth\Teacher\LogoutController;
use App\Http\Controllers\Teacher\ClassController;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\SubjectController;
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

// Login
Route::get('/signin', [SigninController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [SigninController::class, 'login'])->name('signin.login');

// Signout
Route::get('signout', [LogoutController::class, 'signOut'])->name('signout');

Route::post('/signup/teacher', [RegisterController::class, 'register'])->name('teacher.signup.create');

Route::get('/homepage', [HomeController::class, 'showHomePage'])->name('homepage');


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
Route::get('/class/list', [ClassController::class, 'showClass'])->name('class.list');
Route::get('/class/add', [ClassController::class, 'showAddClass'])->name('class.add');
Route::get('/class/edit', [ClassController::class, 'showEdit'])->name('class.edit');
Route::get('/class/detail/{id}', [ClassController::class, 'showDetail'])->name('class.detail');
Route::get('/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');


// Subject
Route::get('/subject/list', [SubjectController::class, 'showSubject'])->name('subject.list');
Route::get('/subject/add', [SubjectController::class, 'showAddSubject'])->name('subject.add');
Route::post('/subject/add', [SubjectController::class, 'addSubject'])->name('subject.add.post');
Route::get('/subject/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');
Route::get('/subject/edit/{id}', [SubjectController::class, 'showEdit'])->name('subject.edit');
Route::post('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit.post');

// User
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('user.profile');
Route::get('/profile/edit', [ProfileController::class, 'showEditProfile'])->name('user.edit');
Route::post('/profile/edit/{id}', [ProfileController::class, 'update'])->name('user.update');


// Student
Route::prefix('student')->group(function () {

    Route::get('/homepage', function () {
        return view('pages.student.homepage');
    })->name('student.home');

    // Assessment
    Route::get('/assessment', function () {
        return view('pages.student.assessment.view');
    })->name('student.assessment.view');

    Route::get('/assessment/view', function () {
        return view('pages.student.assessment.assessment');
    })->name('student.assessment.detail');

    // Subject
    Route::get('/subject', function () {
        return view('pages.student.subject.view');
    })->name('student.subject.view');

    Route::get('/subject/add', function () {
        return view('pages.student.subject.add');
    })->name('student.subject.add');

    // Profile
    Route::get('/profile', function () {
        return view('pages.student.profile.profile');
    })->name('student.profile');

    Route::get('/profile/edit', function () {
        return view('pages.student.profile.edit');
    })->name('student.profile.edit');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
