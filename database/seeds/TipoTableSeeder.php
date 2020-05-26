<?php

use App\Tipo;
use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nombre_Tipo' => 'Nuevo']);
        Tipo::create(['nombre_Tipo' => 'Ocasional']);
        Tipo::create(['nombre_Tipo' => 'Frecuente']);
        Tipo::create(['nombre_Tipo' => 'Plus']);
    }
}
