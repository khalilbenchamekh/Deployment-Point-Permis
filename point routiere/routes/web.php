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
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});


Route::group(array('prefix' => 'admin','middleware' => 'auth'), function()
{
	Route::get('/', 'DashController@index')->name('dash');

	Route::resource('types','TypeController');

	Route::resource('theme', 'ThemeController');

	Route::resource('session','SessionController');

	Route::resource('stagaire','StagaireController');

	Route::resource('animateur','AnimateurController');

	Route::resource('absence','AbsenceController');

	Route::resource('Journee','JourneeController');

	Route::resource('module','ModuleController');
});

Route::get('login',function(){
	return view('login');
})->name('login');

Route::post('login','AuthController@login');

Route::get('logout',function(){
	Auth::logout();
	return Redirect::route('login');
})->name('logout');
