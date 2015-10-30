<?php

class StaffTableSeeder extends Seeder {

	public function run()
	{
		StaffAdmin::create([
			'name' => 'cuongnt',
		
		]);
		
		StaffAdmin::create([
			'name' => 'tungtt',
			
		]);
	}
}