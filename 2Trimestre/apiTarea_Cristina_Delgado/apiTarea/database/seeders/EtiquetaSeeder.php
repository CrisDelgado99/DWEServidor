<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etiquetas')->insert(
            [
                "nombre" => "Estilo de vida"
            ]
        );

        DB::table('etiquetas')->insert(
            [
                "nombre" => "Estudios"
            ]
        );
    }
}
