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
                'cursos' => '|Pre-Jardin'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 100500,
                'recargo' => 8000,
                'cursos' => '|Jardin'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 95500,
                'recargo' => 8000,
                'cursos' => '|Transicion'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 83500,
                'recargo' => 8000,
                'cursos' => '|Primero'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 85500,
                'recargo' => 8000,
                'cursos' => '|Segundo'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 87500,
                'recargo' => 8000,
                'cursos' => '|Tercero'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 90500,
                'recargo' => 8000,
                'cursos' => '|Cuarto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 91500,
                'recargo' => 8000,
                'cursos' => '|Quinto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 94000,
                'recargo' => 8000,
                'cursos' => '|Sexto'
            ],[
                'concepto' => 'matricula',
                'aplica' => 'todos',
                'descipcion' => 'Matricula',
                'costo' => 109000,
                'recargo' => 8000,
                'cursos' => '|Septimo'
            ],

            [
                'concepto' => 'otro',
                'aplica' => 'nuevo',
                'descipcion' => 'Pin Formulario estudiante nuevo',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'antiguo',
                'descipcion' => 'Pin Formulario estudiante antiguo',
                'costo' => 300000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Sistematizacion',
                'costo' => 40000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Carnet',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Agenda',
                'costo' => 30000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Seguro',
                'costo' => 25000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Guias',
                'costo' => 60000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Pasaporte',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Lista de utiles',
                'costo' => 52000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Copia pasaporte',
                'costo' => 7500,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ],[
                'concepto' => 'otro',
                'aplica' => 'todos',
                'descipcion' => 'Interes matricula despues de 16 enero 2017',
                'costo' => 9000,
                'recargo' => 0,
                'cursos' => '|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]
            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sedimo carpeta',
            'costo'=>20000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'certificado institucional ',
            'costo'=>4000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'copia boletin ',
            'costo'=>4000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'copia carnet  ',
            'costo'=>7500,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 4  ',
            'costo'=>29000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 6  ',
            'costo'=>29000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 8  ',
            'costo'=>30000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 10 ',
            'costo'=>30000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 12 ',
            'costo'=>31000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 14 ',
            'costo'=>31000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla 16 ',
            'costo'=>32000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla s  ',
            'costo'=>32000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantalon gris hombre talla m  ',
            'costo'=>35000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 4  ',
            'costo'=>20000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 6  ',
            'costo'=>21000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 8  ',
            'costo'=>22000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 10 ',
            'costo'=>24000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 12 ',
            'costo'=>25000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 14 ',
            'costo'=>26000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla 16 ',
            'costo'=>27000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla s  ',
            'costo'=>28000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camisa blanca hombre talla m  ',
            'costo'=>29000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'corbata caucho gri',
            'costo'=>13000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'corbata para nudo gris',
            'costo'=>17000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar hombre talla 4',
            'costo'=>40000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar hombre talla 6',
            'costo'=>41000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar hombre talla 8',
            'costo'=>42000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 6',
            'costo'=>36000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 8',
            'costo'=>37000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 1',
            'costo'=>38000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 1',
            'costo'=>39000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 1',
            'costo'=>40000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla 1',
            'costo'=>41000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla s',
            'costo'=>42000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. hombre talla m',
            'costo'=>43000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar hombre antifluido laffayette t',
            'costo'=>40000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar hombre antifluido laffayette t',
            'costo'=>41000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar hombre antifluido laffayette t',
            'costo'=>43000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 6',
            'costo'=>50000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 8',
            'costo'=>52000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 1',
            'costo'=>54000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 1',
            'costo'=>56000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 1',
            'costo'=>58000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla 1',
            'costo'=>60000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla s',
            'costo'=>62000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaqueta antifluido laffayette talla m',
            'costo'=>64000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 4 ',
            'costo'=>76000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 6 ',
            'costo'=>79000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 8 ',
            'costo'=>82000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 10',
            'costo'=>85000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 12',
            'costo'=>88000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 14',
            'costo'=>91000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla 16',
            'costo'=>94000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla s ',
            'costo'=>97000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'sudadera antifluido tela nacional talla m ',
            'costo'=>100000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla ',
            'costo'=>25000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla ',
            'costo'=>25500,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla ',
            'costo'=>26000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla 10  ',
            'costo'=>26500,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla 12  ',
            'costo'=>27000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla 14  ',
            'costo'=>27500,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla 16  ',
            'costo'=>28000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla ',
            'costo'=>28500,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'camiseta sudadera tela la coste con bordado talla ',
            'costo'=>29000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 4 ',
            'costo'=>16000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 6 ',
            'costo'=>17000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 8 ',
            'costo'=>18000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 10',
            'costo'=>19000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 12',
            'costo'=>20000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 14',
            'costo'=>21000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla 16',
            'costo'=>22000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla s ',
            'costo'=>23000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'pantaloneta tela adidas poliester talla m ',
            'costo'=>25000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 4 ',
            'costo'=>49000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 6 ',
            'costo'=>51000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 8 ',
            'costo'=>53000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 10',
            'costo'=>55000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 12',
            'costo'=>57000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 14',
            'costo'=>59000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla 16',
            'costo'=>61000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla s ',
            'costo'=>63000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'jardinera paño tela nacional medellin talla m ',
            'costo'=>65000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla ',
            'costo'=>24000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla ',
            'costo'=>26000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla ',
            'costo'=>27000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla 10  ',
            'costo'=>28000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla 12  ',
            'costo'=>29000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla 14  ',
            'costo'=>30000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla 16  ',
            'costo'=>31000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla ',
            'costo'=>32000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'blusa mujer algodón talla ',
            'costo'=>33000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar mujer talla 4 ',
            'costo'=>41000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar mujer talla 6 ',
            'costo'=>42000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'saco abierto preescolar mujer talla 8 ',
            'costo'=>43000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 6 ',
            'costo'=>42000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 8 ',
            'costo'=>43000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 10',
            'costo'=>44000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 12',
            'costo'=>45000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 14',
            'costo'=>46000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla 16',
            'costo'=>47000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla s ',
            'costo'=>48000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'chaleco prim. bach. mujer talla m ',
            'costo'=>49000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar mujer antifluido laffayette t4',
            'costo'=>48000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar mujer antifluido laffayette t6',
            'costo'=>49000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'delantal preescolar mujer antifluido laffayette t8',
            'costo'=>50000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'dia club refuerzo, talleres y diversion sin almuerzo  ',
            'costo'=>4000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'almuerzo seco sopa y liquido  ',
            'costo'=>4000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
            'concepto'=>'otro',
            'aplica'=>'todos',
            'descripcion'=>'hora adicional clu',
            'costo'=>2000,
            'recargo'=>0,
            'cursos'=>'|Pre-Kinder|Kinder|Transicion|Primero|Segundo|Tercero|Cuarto|Quinto|Sexto|Septimo|Octavo|Noveno|Decimo'
            ]

            ,[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 101000,
                'recargo' => 8000,
                'cursos' => '|Pre-Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 100500,
                'recargo' => 8000,
                'cursos' => '|Kinder'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 95500,
                'recargo' => 8000,
                'cursos' => '|Transicion'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 83500,
                'recargo' => 8000,
                'cursos' => '|Primero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 85500,
                'recargo' => 8000,
                'cursos' => '|Segundo'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 87500,
                'recargo' => 8000,
                'cursos' => '|Tercero'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 90500,
                'recargo' => 8000,
                'cursos' => '|Cuarto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 91500,
                'recargo' => 8000,
                'cursos' => '|Quinto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 94000,
                'recargo' => 8000,
                'cursos' => '|Sexto'
            ],[
                'concepto' => 'pension',
                'aplica' => 'todos',
                'descipcion' => 'Pension',
                'costo' => 109000,
                'recargo' => 8000,
                'cursos' => '|Septimo'
            ]
        ]);
    }
}





