<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorizacionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('autorizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario', 20)->unique();
            $table->string('correo', 50)->unique();
            $table->string('contrasena', 60);
            $table->string('token', 60)->unique();
            $table->integer('id_usuario')->unique()->unsigned();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuarios ')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('autorizacions');
    }

}
