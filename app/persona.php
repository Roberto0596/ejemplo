<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'persona';

    protected $fillable=[
    	'id',
    	'nombre',
    	'edad',
    	'created_at',
    	'updated_at'
    ];
}
