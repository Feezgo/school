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
				'aplica' => 'antiguo',
				'descipcion' => 'Matricula estudiantes antiguos',
				'costo' => 350000
			],[
	            'concepto' => 'matricula',
				'aplica' => 'nuevo',
				'descipcion' => 'Matricula estudiantes nuevos',
				'costo' => 400000
			]
        ]);
    }
}
