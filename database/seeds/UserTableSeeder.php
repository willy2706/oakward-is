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
			'nama' => 'Marketing', 
			'username' => 'marketing', 
			'password' => \Hash::make('marketing'), 
			'role' => 'marketing'));
		User::create(array(
			'nama' => 'Operational', 
			'username' => 'operational', 
			'password' => \Hash::make('operational'), 
			'role' => 'operational'));
		User::create(array(
			'nama' => 'Finance', 
			'username' => 'finance', 
			'password' => \Hash::make('finance'), 
			'role' => 'finance'));
	}

}
