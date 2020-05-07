<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre_Categoria' => 'Fotos en exterior', 'precio' => '200']);
        Categoria::create(['nombre_Categoria' => 'Fotos en estudio', 'precio' => '250']);
        Categoria::create(['nombre_Categoria' => 'Edición de fotos', 'precio' => '100']);
        Categoria::create(['nombre_Categoria' => 'Impresión de fotos', 'precio' => '50']);
        Categoria::create(['nombre_Categoria' => 'Videos', 'precio' => '650']);
        Categoria::create(['nombre_Categoria' => 'Paquete', 'precio' => '1500']);
    }
}
