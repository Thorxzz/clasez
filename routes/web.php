<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('admin');

Route::get('/people', [PeopleController::class, 'index'])->name('people.index')->middleware('people');
Route::get('/people/feed', [PeopleController::class, 'feed'])->name('people.feed')->middleware('people');
