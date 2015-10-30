<?php

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		Photo::create([
			'part' => 'D://img/image.jpg',
			'imageable_id' => '1',
			'imageable_type' => 'anh staff',
		
		]);
		
		Photo::create([			
			'part' => 'D://img/image.jpg',
			'imageable_id' => '2',
			'imageable_type' => 'anh Order',
		]);
	}
}