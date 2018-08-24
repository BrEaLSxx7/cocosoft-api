<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('rols')->insert([
            'nombre' => 'Administrador'
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Gerente'
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Empleado'
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Cliente'
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Proveedor'
        ]);
    }

}
