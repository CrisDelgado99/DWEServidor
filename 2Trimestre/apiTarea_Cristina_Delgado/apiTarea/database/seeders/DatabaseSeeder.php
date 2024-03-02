<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama a los seeders de etiquetas y tareas
        $this->call(EtiquetaSeeder::class);
        $this->call(TareaSeeder::class);

        // Llama al seeder de TareaEtiqueta
        $this->call(TareaEtiquetaSeeder::class);
    }

}

