<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		User::create(array(
			'nama' => 'marketing', 
			'username' => 'marketing', 
			'password' => \Hash::make('marketing'), 
			'role' => 'marketing'));
	}

}
