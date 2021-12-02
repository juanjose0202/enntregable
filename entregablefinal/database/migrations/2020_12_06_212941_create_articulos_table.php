<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',10);
            $table->string('nombre',50);
            $table->string('tiposangre',3);
            $table->string('direccion', 60);
            $table->string('licencia', 2);
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
        Schema::dropIfExists('Estudiantes');
    }
}
