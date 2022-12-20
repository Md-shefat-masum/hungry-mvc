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
Route::get('/contact', 'WebsiteControler@contact')->name('website.contact');

Route::post('/contact-submit', 'WebsiteControler@contact_submit')->name('website.contact_submit');


Auth::routes();
Route::get('/profile', 'WebsiteControler@profile')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::group( ['prefix'=>'admin','middleware'=>['auth'] ,'namespace'=>'Admin' ],function(){
    Route::get('/dashboard', 'DashboardControler@index')->name('dashboard_name');



//common
Route::group( ['prefix'=>'common' ],function(){
    Route::get('/all','DashboardControler@demo_all')->name('dashboard.common.all');
    Route::get('/show','DashboardControler@demo_show')->name('dashboard.common.show');
    Route::get('/create','DashboardControler@demo_create')->name('dashboard.common.create');
});

//users
Route::group( ['prefix'=>'user' ],function(){
    Route::get('/all','UserController@all')->name('dashboard.user.all');
    Route::get('/show','UserController@show')->name('dashboard.user.show');
    Route::get('/create','UserController@create')->name('dashboard.user.create');
});


});
