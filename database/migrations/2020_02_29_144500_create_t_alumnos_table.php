<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_t_alumno');
            $table->char('nombre', 80);
            $table->char('ap_paterno', 80);
            $table->char('ap_materno', 80);
            $table->boolean('activo')->default(0);
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
        Schema::dropIfExists('t_alumnos');
    }
}
