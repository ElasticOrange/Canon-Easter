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

Route::get('admin/login', 'Admin\AdminLoginController@getIndex');
Route::post('admin/login', 'Admin\AdminLoginController@postIndex');

Route::group(
    array('before' => 'admin_auth')
    , function()
    {
		Route::resource('/admin/user', 'Admin\AdminUserController');
		Route::get('/admin/', 'Admin\AdminController@index');
		Route::get('admin/entry', 'Admin\AdminEntryController@index');
	}
);

// The filter that checks if the user is logged in
Route::filter(
	'admin_auth'
    , function()
    {
        if (!Session::get('admin'))
        {
            return redirect('/admin/login');
        }
    }
);