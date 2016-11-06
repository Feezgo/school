<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert([
        	[
	            'departamento' => 'Cauca',
			],[
	            'departamento' => 'Cundinamarca',
			],[
                'concepdepartamentoto' => 'Quindio',
            ]
        ]);
    }
}
