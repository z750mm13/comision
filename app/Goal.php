<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model {
    use SoftDeletes;
    protected $fillable = [
        'porcentaje', 'anio'
    ];
}
