<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto', 50)->unique();
            $table->string('nombre_empresa', 25);
            $table->string('nombre_completo', 100);
            $table->string('telefono', 25)->unique();
            $table->string('telefono_empresa', 25)->unique();
            $table->string('direccion_empresa', 25);
            $table->string('correo', 50)->unique();
            $table->string('pagina_web', 50);
            $table->string('departamento', 30);
            $table->string('ciudad', 30);
            $table->string('genero', 20);
            $table->integer('id_sucursal')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->timestamps();

            $table->foreign('id_sucursal')->references('id')->on('sucursals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_rol')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contactos');
    }

}
