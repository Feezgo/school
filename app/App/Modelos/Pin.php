<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pin extends Model
{
    //
    protected $table = "pin";
	protected $dates = ['deleted_at'];

    
}
