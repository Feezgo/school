<?php

use Illuminate\Database\Seeder;

class DiscapacidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discapacidad')->insert([
        	[
	            'discapacidad' => 'Uno'
			],[
	            'discapacidad' => 'dos'
			],[
                'discapacidad' => 'tres'
            ]
        ]);
    }
}
