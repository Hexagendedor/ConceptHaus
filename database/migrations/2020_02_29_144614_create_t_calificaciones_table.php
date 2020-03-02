<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_calificaciones', function (Blueprint $table) {
            $table->bigIncrements('id_t_calificaciones');
            $table->unsignedBigInteger('id_t_materia');
            $table->unsignedBigInteger('id_t_alumno');
            $table->decimal('calificacion', 8, 2)->default(0.0);
            
            //for index unique key combination no repeated at save
            $table->unique(['id_t_materia', 'id_t_alumno']);
            $table->foreign('id_t_materia')->references('id_t_materia')->on('t_materias')->onDelete('cascade');
            $table->foreign('id_t_alumno')->references('id_t_alumno')->on('t_alumnos')->onDelete('cascade');
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
        Schema::dropIfExists('t_calificaciones');
    }

}
