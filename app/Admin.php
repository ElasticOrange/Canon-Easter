<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

	protected $fillable = [];

    static public function login($Username, $Password)
    {
        $admin = Admin::where('username', $Username)->where('password', md5($Password))->first();

        return $admin;
    }

    public function isATeamManager()
    {
    	return false;
    }

}
