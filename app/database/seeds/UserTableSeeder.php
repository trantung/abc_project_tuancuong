<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'tung',
			'email' => 'tung@gmail.com',
			'password' => Hash::make('123456'),
		]);
		
		User::create([
			'name' => 'cuong',
			'email' => 'cuong@gmail.com',
			'password' => Hash::make('654321'),
		]);
	}
}