<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert(
            [
                "titulo" => "Limpiar",
                "descripcion" => "Fregar el salón y recoger la cocina."
            ]
        );

        DB::table('tareas')->insert(
            [
                "titulo" => "Programar",
                "descripcion" => "Programar una api rest en Laravel."
            ]
        );
    }
}
