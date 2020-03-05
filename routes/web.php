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

// ADMIN ROUTES
Route::prefix('admin')->group(function() {

    // ADMIN LOGIN ROUTES
    Route::get('/login', 'Admin\Auth\LoginController@index')->name('admin.login');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

    // ADMIN DASHBOARD ROUTES
    Route::get('/', 'Admin\Dashboard\DashboardController@index')->name('admin.dashboard');

    Route::get('/blog', 'Admin\Modules\Blog\BlogController@index')->name('admin.blog.index');
    Route::get('/blog/create', 'Admin\Modules\Blog\BlogController@create')->name('admin.blog.create');
    Route::post('/blog/store', 'Admin\Modules\Blog\BlogController@store')->name('admin.blog.store');



});

Route::get('/{any?}', function () {
    return view('welcome');
});
