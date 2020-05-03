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
        Categoria::create(['nombre_Categoria' => 'Fotos en exterior']);
        Categoria::create(['nombre_Categoria' => 'Fotos en estudio']);
        Categoria::create(['nombre_Categoria' => 'Edición de fotos']);
        Categoria::create(['nombre_Categoria' => 'Impresión de fotos']);
        Categoria::create(['nombre_Categoria' => 'Videos']);
        Categoria::create(['nombre_Categoria' => 'Paquete']);
    }
}
