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

Route::controller('entry', 'EntryController');
Route::get('admin/entry/photo/{id}', 'Admin\AdminEntryController@getImage');
Route::get('admin/entry/aprobat', 'Admin\AdminEntryController@getAprobat');
Route::put('admin/entry/aprobat', 'Admin\AdminEntryController@putDisapprove');
Route::put('admin/entry', 'Admin\AdminEntryController@putApprove');

Route::get('admin/logout', 'Admin\AdminLoginController@getLogout');

Route::get('admin/login', 'Admin\AdminLoginController@getIndex');
Route::post('admin/login', 'Admin\AdminLoginController@postIndex');

Route::resource('/admin/user', 'Admin\AdminUserController');
Route::get('/admin/', 'Admin\AdminController@index');
Route::get('admin/entry', 'Admin\AdminEntryController@getIndex');
