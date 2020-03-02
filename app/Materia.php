<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_materias';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_t_materia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'activo',
    ];
    
    /**
     * To get the own calificaciones
     */
    public function calificaciones(){
        return $this->hasMany('App\Calificacion');
    }
}
