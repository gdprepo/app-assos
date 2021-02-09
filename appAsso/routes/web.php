<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/assosiations', 'DashboardController@assos')->name('dashboard.assos');

Route::post('/dashboard/assosiations/{id}', 'DashboardController@assosDelete')->name('assos.delete');

Route::get('/dashboard/assosiations/add', 'DashboardController@assosAdd')->name('assos.add');
Route::post('/dashboard/assosiations/add/created', 'DashboardController@assosStore')->name('assos.store');

Route::get('/dashboard/assosiations/posts', 'DashboardController@assosPost')->name('assos.posts');
Route::get('/dashboard/assosiations/posts/{id}', 'DashboardController@assospostList')->name('post.list');
Route::get('/dashboard/posts/add/{id}', 'DashboardController@postAdd')->name('post.add');
Route::post('/dashboard/posts/add/created/{id}', 'DashboardController@postStore')->name('post.store');

Route::post('/dashboard/posts/delete/{id}', 'DashboardController@postDelete')->name('post.delete');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');



