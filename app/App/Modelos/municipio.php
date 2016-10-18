<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    //
    protected $table = "municipio";

    public function departamentos()
    {
    	return $this->belongsTo('School\App\Modelos\municipio', 'id_departamento');
    }
}
