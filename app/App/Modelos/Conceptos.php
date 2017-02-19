<?php
namespace School\App\Modelos;


use Illuminate\Database\Eloquent\Model;

class Conceptos extends Model
{
    //
    protected $table = "conceptos";
	protected $primaryKey = 'id';
	protected $fillable = ['nombre','valor'];
	protected $connection = ''; 
	public $timestamps = true;
}
