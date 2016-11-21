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
                'cursos' => 'Transición'
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
                'descipcion' => 'Pensión',
                'costo' => 101000,
                'recargo' => 8000,
                'cursos' => 'Pre-Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 100500,
                'recargo' => 8000,
                'cursos' => 'Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 95500,
                'recargo' => 8000,
                'cursos' => 'Transición'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 83500,
                'recargo' => 8000,
                'cursos' => 'Primero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 85500,
                'recargo' => 8000,
                'cursos' => 'Segundo'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 87500,
                'recargo' => 8000,
                'cursos' => 'Tercero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 90500,
                'recargo' => 8000,
                'cursos' => 'Cuarto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 91500,
                'recargo' => 8000,
                'cursos' => 'Quinto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 94000,
                'recargo' => 8000,
                'cursos' => 'Sexto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pensión',
                'costo' => 109000,
                'recargo' => 8000,
                'cursos' => 'Septimo'
            ],[
                'concepto' => 'Formulario estudiante nuevo',
                'aplica' => 'nuevo',
                'descipcion' => 'Formulario estudiante nuevo',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'Formulario estudiante antiguo',
                'aplica' => 'antiguo',
                'descipcion' => 'Formulario estudiante antiguo',
                'costo' => 300000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'sistematización',
                'aplica' => 'todos',
                'descipcion' => 'Sistematización',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'formulario',
                'aplica' => 'todos',
                'descipcion' => 'Formulario',
                'costo' => 30000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'carnet',
                'aplica' => 'todos',
                'descipcion' => 'Carnet',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'agenda',
                'aplica' => 'todos',
                'descipcion' => 'Agenda',
                'costo' => 30000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'seguro',
                'aplica' => 'todos',
                'descipcion' => 'Seguro',
                'costo' => 25000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'guias',
                'aplica' => 'todos',
                'descipcion' => 'Guias',
                'costo' => 60000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'pasaporte',
                'aplica' => 'todos',
                'descipcion' => 'Pasaporte',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ],[
                'concepto' => 'lista de utiles',
                'aplica' => 'todos',
                'descipcion' => 'Lista de utiles',
                'costo' => 52000,
                'recargo' => 0,
                'cursos' => 'Pre-Kinder,Kinder,Pre-Kinder,Kinder,Transición,Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo'
            ]
        ]);
    }
}



