<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('departamento', 30);
            $table->string('ciudad', 30);
            $table->string('direccion', 50);
            $table->string('telefono', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sucursals');
    }

}
