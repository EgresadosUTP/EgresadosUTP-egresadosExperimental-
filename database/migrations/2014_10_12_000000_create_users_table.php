<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dni')->unique();
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('telefono'); // campo extra :D
            $table->string('password');
            $table->date('fechaNacimiento');
            $table->enum('genero', ['Hombre', 'Mujer', 'Otro']);

            // Foreign Keys
            $table->unsignedBigInteger('idEgreso');
            $table->unsignedBigInteger('idCiudad');
            $table->unsignedBigInteger('idInteres');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
