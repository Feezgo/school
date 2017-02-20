<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class FacturaConcepto extends Model
{
    //
    protected $table = "facturaconcepto";
	protected $primaryKey = 'id';
	protected $fillable = ['id_factura','fecha_inicio','fecha_fin','Concepto','grado_est','nota','mes'];
	protected $connection = ''; 
	public $timestamps = true;
}

       
           