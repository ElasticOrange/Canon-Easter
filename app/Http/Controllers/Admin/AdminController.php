<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class AdminController extends Controller {
	public function index()
	{
		return redirect('admin/entry');
	}
}