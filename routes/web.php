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

Route::get('/', 'WebsiteControler@home');
Route::get('/contact', 'WebsiteControler@contact')->name('website.contact');
Route::post('/contact-submit','WebsiteControler@contact_submit')->name('website.contact_submit');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.home');
    Route::get('/user', 'DashboardController@index')->name('dashboard.user');
    Route::get('/setting', 'DashboardController@index')->name('dashboard.setting');
    Route::get('/profile', 'DashboardController@index')->name('dashboard.profile');

    //contact
    Route::group( ['prefix'=>'contact'],function(){
        Route::get('/all','ContactController@index')->name('dashboard.contact.all');
        Route::get('/create','ContactController@create')->name('dashboard.contact.create');
        Route::get('/show/{id}','ContactController@show')->name('dashboard.contact.show');
        Route::get('/destroy/{id}','ContactController@destroy')->name('dashboard.contact.destroy');
    });

    //user
    Route::group( ['prefix'=>'user'],function(){
        Route::get('/all','UserController@all')->name('dashboard.user.all');
        Route::get('/show/{id}','UserController@show')->name('dashboard.user.show');
        Route::get('/create','UserController@create')->name('dashboard.user.create');
        Route::post('/store','UserController@store')->name('dashboard.user.store');
    });

    //common
    Route::group( ['prefix'=>'common'],function(){
        Route::get('/all','DashboardController@demo_all')->name('dashboard.common.all');
        Route::get('/create','DashboardController@demo_create')->name('dashboard.common.create');
        Route::get('/show','DashboardController@demo_show')->name('dashboard.common.show');
    });
});
