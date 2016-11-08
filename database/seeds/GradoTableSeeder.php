<?php

use Illuminate\Database\Seeder;

class GradoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grado')->insert([
        	[
                'grado' => 'Pre-Kinder',
			],[
	            'grado' => 'Knder',
			],[
                'grado' => 'Transición',
            ]
        ]);
    }
}
