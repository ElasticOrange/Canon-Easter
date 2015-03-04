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

    public function getAprobat()
    {
        $entries = Entry::where('approved', true)->oldest()->get();
        return view('admin.entry.aprobat', compact('entries'));
    }

    public function putApprove()
    {
        $entry = Entry::find(Request::input('id'));
        $entry->approved = 1;
        $entry->save();

        return response()->json(array(
            'status' => 'OK'
            , 'error' => ''
            , 'id' => Request::input('id')
        ));
    }
    
    // public function putDisapprove()
    // {
    //     $entry = Entry::find(Request::input('id'));
    //     $entry->approved = false;
    //     $entry->save();

    //     return response()->json(array(
    //         'status' => 'OK'
    //         , 'error' => ''
    //         , 'id' => Input::get('id')
    //     ));
    // }
	
	public function getLogout()
    {
        Session::forget('admin');

        return redirect('/admin/login');
    }
}