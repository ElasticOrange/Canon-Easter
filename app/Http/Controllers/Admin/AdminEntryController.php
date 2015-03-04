<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Entry;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;
use File;
use Illuminate\Http\Response;

class AdminEntryController extends Controller {
	
	public function getIndex()
	{
		$entries = Entry::all();
		return view('admin.entry.index', compact('entries')); 
	}

    public function getImage($id)
    {
    	$entry = Entry::find($id);
    	$photo = File::get(storage_path(). "/photos/" . $entry->photo); 
    	return (new Response($photo, 200))
              ->header('Content-Type', 'image/png');
	}
	
	public function getLogout()
    {
        Session::forget('admin');

        return redirect('/admin/login');
    }

}