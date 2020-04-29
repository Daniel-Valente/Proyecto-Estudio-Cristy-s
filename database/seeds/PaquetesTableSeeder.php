<?php

use\App\Paquete;
use Illuminate\Database\Seeder;

class PaquetesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paquete::create(['nombre_Paquete' => 'Chico']);
        Paquete::create(['nombre_Paquete' => 'Mediano']);
        Paquete::create(['nombre_Paquete' => 'Grande']);
        Paquete::create(['nombre_Paquete' => 'Extra Grande']);
        Paquete::create(['nombre_Paquete' => 'Escolar']);
    }
}
