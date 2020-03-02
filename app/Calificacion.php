<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_calificaciones';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_t_calificaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_t_materia', 'id_t_alumno', 'calificacion',
    ];

    /**
     * Get the Alumno that owns the Calificacion.
     */
    public function alumno(){
        return $this->belongsTo('App\Alumno');
    }
    /**
     * Get the Materia that owns the calificacion.
     */
    public function materia(){
        return $this->belongsTo('App\Materia');
    }
}
