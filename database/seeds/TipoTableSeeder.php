<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tipo__documentos')->insert([
            'nombre' => 'Cédula Ciudadania'
        ]);
        DB::table('tipo__documentos')->insert([
            'nombre' => 'Pasaporte'
        ]);
        DB::table('tipo__documentos')->insert([
            'nombre' => 'Cédula Extranjeria'
        ]);
    }

}
