<?php

namespace Database\Seeders;
use App\Models\Etiqueta;
use App\Models\Tarea;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TAREAS
        $tareaLimpiar = Tarea::where('titulo', 'Limpiar')->first();
        $tareaProgramar= Tarea::where('titulo', 'Programar')->first();
        //ETIQUETAS
        $etiquetaEstiloVida = Etiqueta::where('nombre', 'Estilo de vida')->first();
        $etiquetaEstudio = Etiqueta::where('nombre', 'Estudios')->first();

        $tareaLimpiar->etiquetas()->attach($etiquetaEstiloVida);
        $tareaProgramar->etiquetas()->attach($etiquetaEstiloVida);
        $tareaProgramar->etiquetas()->attach($etiquetaEstudio);
    }
}
