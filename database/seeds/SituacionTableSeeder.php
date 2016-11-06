<?php

use Illuminate\Database\Seeder;

class SituacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('situacion')->insert([
        	[
	            'situacion' => 'Uno'
			],[
	            'situacion' => 'dos'
			],[
                'concepto' => 'tres'
            ]
        ]);
    }
}
