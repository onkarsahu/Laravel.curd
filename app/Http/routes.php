<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('profile-form', 'HelloController@showForm' );

Route::get('test', 'HelloController@index' );

/*Route::get('demo',function(){
	return view('hello');
});
*/
 Route::get('/', function () {
     return view('welcome');
 });
