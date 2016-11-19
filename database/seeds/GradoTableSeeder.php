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
            ],[
                'grado' => 'Primero',
            ],[
                'grado' => 'Segundo',
            ],[
                'grado' => 'Tercero',
            ],[
                'grado' => 'Cuarto',
            ],[
                'grado' => 'Quinto',
            ],[
                'grado' => 'Sexto',
            ],[
                'grado' => 'Septimo',
            ],[
                'grado' => 'Octavo',
            ],[
                'grado' => 'Noveno',
            ],[
                'grado' => 'Decimo',
            ]
        ]);
    }
}
