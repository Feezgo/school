<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Factura2017 extends Model
{
    //
    protected $table = "factura2017";
	protected $primaryKey = 'id';
	protected $fillable = ['id_usuario','id_estudiante','fechaRegistro'];
	protected $connection = ''; 
	public $timestamps = true;
}
