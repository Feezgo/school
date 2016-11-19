<?php

use Illuminate\Database\Seeder;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
        	[
	            'concepto' => 'matricula',
				'aplica' => 'nuevo',
				'descipcion' => 'Matricula estudiantes nuevos',
				'costo' => 350000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Transición'
			],[
	            'concepto' => 'matricula',
				'aplica' => 'antiguo',
				'descipcion' => 'Matricula estudiantes antiguos',
				'costo' => 300000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Transición'
			],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 85000,
                'recargo' => 8000,
                'cursos' => 'Pre-Kinder,Kinder,Transición'
            ]
        ]);
    }
}
