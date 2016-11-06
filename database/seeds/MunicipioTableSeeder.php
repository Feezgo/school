<?php

use Illuminate\Database\Seeder;

class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipio')->insert([
        	[
	            'id_departamento' => '1',
                'municipio' => 'Cauca',
			],[
                'id_departamento' => '1',
	            'municipio' => 'Cundinamarca',
			],[
                'id_departamento' => '1',
                'municipio' => 'Quindio',
            ]
        ]);
    }
}
