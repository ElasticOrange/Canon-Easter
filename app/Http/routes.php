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

Route::get('/', 'EntryController@getIndex');
Route::post('/', 'EntryController@getIndex');
Route::post('entry', 'EntryController@postIndex');

Route::group(['middleware' => ['manager', 'csrf']], function()
{
	Route::get('admin/entry/photo/{id}', 'Admin\AdminEntryController@getImage');
	Route::get('admin/entry/aprobat', 'Admin\AdminEntryController@getAprobat');
	Route::put('admin/entry/aprobat', 'Admin\AdminEntryController@putDisapprove');

	Route::get('admin/entry', 'Admin\AdminEntryController@getIndex');
	Route::put('admin/entry', 'Admin\AdminEntryController@putApprove');

	Route::resource('/admin/user', 'Admin\AdminUserController');


	Route::get('/admin/', 'Admin\AdminController@index');
	Route::get('admin/logout', 'Admin\AdminLoginController@getLogout');
});

Route::post('admin/login', 'Admin\AdminLoginController@postIndex');
Route::get('admin/login', 'Admin\AdminLoginController@getIndex');

Route::get('form', 'FormController@create');
Route::post('form', 'FormController@store');