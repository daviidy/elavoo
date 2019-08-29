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

Route::get('/', function () {
    return view('homepage');
});

//route to go on the companies page
Route::get('/corporate', function () {
    return view('companies');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route to go on the companies page
Route::get('/politique', function () {
    return view('politique');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//route for invoke admin middleware
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

//route to invoke deliver middleware
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

//route for item resources
Route::resource('items','ItemController');

//route for bill resources
Route::resource('bills','BillController');

//route to go on the order second step page
Route::get('/secondStep', function () {
    return view('bills.create2');
});

//different routes for mobile money payment
Route::post('/envoi', 'BillController@envoi')->name('envoi');

Route::post('/notify', 'BillController@notify')->name('notify');

Route::post('/merci', 'BillController@merci');

Route::get('/merci', 'BillController@merci');

Route::post('/assign', 'BillController@assign')->name('assign');

//route for adress resources
Route::resource('adresses','AdressController');


//route for users resources
Route::resource('users','UserController');


//route for categories resources
Route::resource('categories','CategoryController');

//route for bills resources
Route::resource('bills','BillController');

/**
 * [Routes Ajax]
 * @var [type]
 */

//route pour stocker les infos avec ajax
//des items selectionnés et aller
//à la page commande
Route::post('/command', 'OrderController@saveItemInSession');

Route::post('/coordonnate', 'OrderController@secondStepOrder');
