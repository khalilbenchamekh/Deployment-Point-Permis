<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;


Route::get('auth/logout', 'AuthController@logout');
Route::controllers([
	'auth' => 'AuthController',
	'password' => 'PasswordController',
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('dash', 'DashController@index')->name('dash');


Route::resource('dash/types','TypeController');

Route::resource('dash/theme', 'ThemeController');

Route::resource('dash/session','SessionController');

Route::resource('dash/stagaire','StagaireController');

Route::resource('dash/animateur','AnimateurController');

Route::resource('dash/absence','AbsenceController');

Route::resource('dash/Journee','JourneeController');

Route::resource('dash/module','ModuleController');