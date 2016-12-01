<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessageTableSeeder extends Seeder
{

	private $_numberOfMessage = 5;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();

        for ($i = 0; $i < $this->_numberOfMessage; $i++) {
        	Message::create([
        			"name" => $faker->name,
        			"message" => $faker->realText(200)
        		]);
        }

    }
}
