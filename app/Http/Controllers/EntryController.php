<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Entry;
//use Illuminate\Http\Request;

class EntryController extends Controller {
    
    public $return_data = [];

    private $picture_path = '';

    public function __construct()
    {
        $this->picture_path = storage_path() .'/pictures/';
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

        $entry->save();

        return 'te-ai inscris cu succes';
    }
}