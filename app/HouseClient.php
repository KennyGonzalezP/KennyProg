<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseClient extends Model
{
    protected $fillable = [
        'nombre', 'email', 'telefono', 'descripcion'
    ];
}
