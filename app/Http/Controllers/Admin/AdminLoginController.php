<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class AdminLoginController extends Controller {

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
            return view('admin.entry.index');
        }
        else
        {
            return view('admin.login.index');
        }
	}

	public function getLogout()
    {
        Session::forget('admin');

        return redirect('admin/login');
    }

}
