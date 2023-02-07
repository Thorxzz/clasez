<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;

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
    return view('landingpage');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('admin');

Route::get('/people', [PeopleController::class, 'index'])->name('people.index')->middleware('people');
Route::get('/people/search', [PeopleController::class, 'search'])->name('people.search')->middleware('people');

Route::get('/people/feed', [PeopleController::class, 'feed'])->name('people.feed')->middleware('people');
Route::get('/people/feed/create', [PeopleController::class, 'create'])->name('people.feed.create')->middleware('people');
Route::post('/people/feed/store', [PeopleController::class, 'store'])->name('people.feed.store')->middleware('people');
Route::get('/people/feed/like/{id}', [LikeController::class, 'like'])->name('people.feed.like')->middleware('people');
Route::post('/people/feed/comment/{id}', [CommentController::class, 'create'])->name('people.feed.comment')->middleware('people');
Route::get('/people/feed/comment/delete/{id}', [CommentController::class, 'delete'])->name('people.feed.comment.delete')->middleware('people');
Route::get('/people/feed/detail/{id}', [PeopleController::class, 'detail'])->name('people.detail')->middleware('people');


Route::get('/people/message', [PeopleController::class, 'message'])->name('people.message')->middleware('people');
Route::get('/people/profile/{id}', [PeopleController::class, 'profile'])->name('people.profile')->middleware('people');
Route::get('/people/profile/edit/{id}', [PeopleController::class, 'edit'])->name('people.profile.edit')->middleware('people');
Route::post('/people/profile/update/{id}', [ProfileController::class, 'update'])->name('people.profile.update')->middleware('people');
Route::get('/people/profile/follow/{following}/{followers}', [FollowController::class, 'follow'])->name('people.follow')->middleware('people');

Route::post('/like/{id}', 'PeopleController@like');
