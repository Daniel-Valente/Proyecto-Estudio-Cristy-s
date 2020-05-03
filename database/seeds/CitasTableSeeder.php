<?php

use App\Cita;
use Illuminate\Database\Seeder;

class CitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cita::create(['nombre_Cita' => 'Programada']);
        Cita::create(['nombre_Cita' => 'Cancelada']);
        Cita::create(['nombre_Cita' => 'Cumplida']);
    }
}
