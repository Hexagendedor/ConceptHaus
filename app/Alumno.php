<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_alumnos';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_t_alumno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'ap_paterno', 'ap_materno', 'activo'
    ];

    /**
     * To get the own calificaciones.
     */
    public function calificaciones(){
        return $this->hasMany('App\Calificacion');
    }

    /**
     * To get formated data from created_at of timestamps.
     */
    public function fecha_registro(){
        return $this->created_at->format('m/d/Y');
    }
}
