<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Entry;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;

class AdminEntryController extends Controller {
	
	public function getIndex()
	{
		$entries = Entry::all();

		return view('admin.entry.index', compact('entries'));
	}

	// public function getLogout()
 //    {
 //        Session::forget('admin');

 //        return redirect('/admin/login');
 //    }

}