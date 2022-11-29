<?php

use App\Http\Controllers\WebsiteControler;
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

Route::get('/', 'WebsiteControler@home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.home');
    Route::get('/user', 'DashboardController@index')->name('dashboard.user');
    Route::get('/setting', 'DashboardController@index')->name('dashboard.setting');
    Route::get('/profile', 'DashboardController@index')->name('dashboard.profile');

    //user
    Route::group( ['prefix'=>'user'],function(){
        Route::get('/all','UserController@all')->name('dashboard.user.all');
        Route::get('/create','UserController@create')->name('dashboard.user.create');
        Route::get('/show','UserController@show')->name('dashboard.user.show');
    });

    //common
    Route::group( ['prefix'=>'common'],function(){
        Route::get('/all','DashboardController@demo_all')->name('dashboard.common.all');
        Route::get('/create','DashboardController@demo_create')->name('dashboard.common.create');
        Route::get('/show','DashboardController@demo_show')->name('dashboard.common.show');
    });
});
