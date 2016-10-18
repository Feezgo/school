<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //
    protected $table = "departamento";
	protected $dates = ['deleted_at'];


	public function municipios() 
	{
		return $this->hasMany('School\App\Modelos\municipio', 'id_departamento');
	}
}
