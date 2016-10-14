<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class HistoriaAcademica extends Model
{
    protected $table = "historias_academicas";

    public function estudiante()
    {
    	return $this->belongsTo('School\App\Modelos\HistoriaAcademica', 'id_estudiante');
    }
}
