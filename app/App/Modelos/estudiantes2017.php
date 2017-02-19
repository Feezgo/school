<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class estudiantes2017 extends Model
{
    //
    protected $table = "estudiantes2017";
	protected $primaryKey = 'id';
	protected $fillable = ['nombre','id_grado','activo'];
	protected $connection = ''; 
	public $timestamps = true;

	public function grado() 
	{
		return $this->belongsTo('School\App\Modelos\Grado', 'id_grado');
	}
	
}
