<?php

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

//StartPage
Auth::routes();

Route::get('/admin', 'LaptopController@indexLaptop')->name('homelaptop');

//Frontend

Route::get('/', function (){
    return view('/Frontend/index');
});
Route::get('/team', function (){
    return view('/Frontend/team');
});
Route::get('/about', function (){
    return view('/Frontend/about');
});
Route::get('/laptop', 'HomeController@home');
Route::get('/desktop', 'Homedesktop@home');
Route::get('/accesory', 'HomeAccessory@home');
Route::get('/singlelaptop/{id}', 'HomeController@show');
Route::get('/singledesktop/{id}', 'Homedesktop@show');
Route::get('/singleAcc/{id}', 'HomeAccessory@show');

//Laptops Route
Route::get('/homelaptop', 'LaptopController@indexLaptop');

Route::get('/createlaptop', function(){
    return view('createlaptop');
});

Route::post('/insertlaptop', 'LaptopController@addLaptop')->name('insertlaptop');

Route::get('/updatelaptop/{id}', 'LaptopController@editLaptop');

Route::post('/updatelaptopp/{id}', 'LaptopController@updateLaptop');

Route::get('/showlaptop/{id}', 'LaptopController@show');

Route::get('/deletelaptopp/{id}', 'LaptopController@deleteLaptop');

//Desktops Route
Route::get('/homedesktop', 'DesktopController@index');

Route::get('/createdesktop', function(){
    return view('createdesktop');
});

Route::post('/insertdesktop', 'DesktopController@add')->name('insertdesktop');

Route::get('/updatedesktop/{id}', 'DesktopController@edit');

Route::post('/updatedesktopp/{id}', 'DesktopController@update');

Route::get('/showdesktop/{id}', 'DesktopController@show');

Route::get('/deletedesktopp/{id}', 'DesktopController@delete');

//Accessories Route
Route::get('/home', 'AccessoryController@index');

Route::get('/create', function(){
    return view('create');
});



Route::post('/insert', 'AccessoryController@add')->name('insert');

Route::get('/update/{id}', 'AccessoryController@update');

Route::post('/edit/{id}', 'AccessoryController@edit');

Route::get('/show/{id}', 'AccessoryController@show');

Route::get('/delete/{id}', 'AccessoryController@delete');

