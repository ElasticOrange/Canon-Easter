<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateEntryRequest;
use App\Http\Controllers\Controller;
use App\Entry;
//use Illuminate\Http\Request;
use Request;

class FormController extends Controller {

	private $photo_path = '';

    public function __construct()
    {
        $this->photo_path = storage_path() .'/photos/';
    }

	public function create()
	{
		return view('entry.textform');
	}

	public function store(CreateEntryRequest $request)
	{
		$input = $request->all();
		
		$photo = Request::file('photo');
        $new_name = md5(microtime()) .'.png';
        $photo->move($this->photo_path, $new_name);
        $input['photo'] = ($photo = $new_name);

		Entry::create($input);

		return $input;
	}

}
