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
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 101000,
                'recargo' => 8000,
                'cursos' => 'Pre-Kinder'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 100500,
                'recargo' => 8000,
                'cursos' => 'Kinder'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 95500,
                'recargo' => 8000,
                'cursos' => 'Transicion'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 83500,
                'recargo' => 8000,
                'cursos' => 'Primero'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 85500,
                'recargo' => 8000,
                'cursos' => 'Segundo'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 87500,
                'recargo' => 8000,
                'cursos' => 'Tercero'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 90500,
                'recargo' => 8000,
                'cursos' => 'Cuarto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 91500,
                'recargo' => 8000,
                'cursos' => 'Quinto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 94000,
                'recargo' => 8000,
                'cursos' => 'Sexto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 109000,
                'recargo' => 8000,
                'cursos' => 'Septimo'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 101000,
                'recargo' => 8000,
                'cursos' => 'Pre-Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 100500,
                'recargo' => 8000,
                'cursos' => 'Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 95500,
                'recargo' => 8000,
                'cursos' => 'Transicion'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 83500,
                'recargo' => 8000,
                'cursos' => 'Primero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 85500,
                'recargo' => 8000,
                'cursos' => 'Segundo'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 87500,
                'recargo' => 8000,
                'cursos' => 'Tercero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 90500,
                'recargo' => 8000,
                'cursos' => 'Cuarto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 91500,
                'recargo' => 8000,
                'cursos' => 'Quinto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 94000,
                'recargo' => 8000,
                'cursos' => 'Sexto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 109000,
                'recargo' => 8000,
                'cursos' => 'Septimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'nuevo',
                'descipcion' => 'Formulario estudiante nuevo',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'antiguo',
                'descipcion' => 'Formulario estudiante antiguo',
                'costo' => 300000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Sistematizacion',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Formulario',
                'costo' => 30000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Carnet',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Agenda',
                'costo' => 30000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Seguro',
                'costo' => 25000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Guias',
                'costo' => 60000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Pasaporte',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Lista de utiles',
                'costo' => 52000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transicion,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ]
        ]);
    }
}



