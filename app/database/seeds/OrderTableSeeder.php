<?php

class OrderTableSeeder extends Seeder {

	public function run()
	{
		Order::create([
			'price' => '500',		
		]);
		
		Order::create([			
			'price' => '700',
		]);
	}
}