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

Route::get('/', function () {
    $categories=App\Category::all();
    return view('client.index',compact('categories'));
});

Route::get('/about', function () {
    return view('client.about');
});

Route::resource('/category','CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/company','CompanyController');

Route::resource('/job','JobController');

Route::resource('/cv','CVController');


