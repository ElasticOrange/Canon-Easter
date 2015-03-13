<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEntryRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
          'nume' => 'required|min:3'
        , 'photo' => 'required|mimes:jpeg,bmp,png'
        , 'adresa' => 'required|min:3'
        , 'email' => 'required|email|unique:entries'
        , 'telefon' => 'required'
		];
	}

}
