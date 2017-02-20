<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagosTableSeeder::class);
        $this->call(SituacionTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(MunicipioTableSeeder::class);
        $this->call(DiscapacidadTableSeeder::class);
        $this->call(GradoTableSeeder::class);
        $this->call(Conceptos2017::class);
        $this->call(Estudiantes2017::class);
        
    }
}
