<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Entry;
//use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EntryController extends Controller {
    
    private $photo_path = '';

    public function __construct()
    {
        $this->photo_path = storage_path() .'/photos/';
    }
	
	public function getIndex()
	{
		return view('entry.formentry');
	}

    public function postIndex()
    {

        $entry = new Entry();

        $entry->approved = false;
        $entry->nume = Request::input('nume');
        $entry->prenume = Request::input('prenume');
        $entry->email = Request::input('email');
        $entry->adresa = Request::input('adresa');
        $entry->telefon = Request::input('telefon');

        $photo = Request::file('photo');
        //dd($photo);
        $new_name = md5(microtime()) .'.png';

        $photo->move($this->photo_path, $new_name);
        $entry->photo = $new_name;
        $entry->save();
        return 'ok';
    }
}