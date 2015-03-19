<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Admin;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('AdminsTableSeeder');
	}

}

class AdminsTableSeeder extends Seeder {
    public function run()
    {
    	DB::table('admins')->delete();
    	Admin::create([
    		  'username' => 'admin'
    		, 'password' => md5('admin') 
    		  ]);
    }
}
