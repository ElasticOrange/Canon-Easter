<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model {

	protected $fillable = [
        'approved'
        , 'nume'
        , 'photo'
        , 'prenume'
        , 'adresa'
        , 'email'
        , 'telefon'
    ];

}