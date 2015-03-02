<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class AdminController extends Controller {

	public function getIndex()
	{
		return view('admin.login.index');
	}

	public function postIndex()
	{
		$admin = Admin::login(Request::input('username'), Request::input('password'));

        if ($admin)
        {
            Session::put('admin', $admin);
            return 'logat';
        }
        else
        {
            return 'nelogat';
        }
	}

	public function getLogout()
    {
        Session::forget('admin');

        return 'ai fost delogat';
    }

}
