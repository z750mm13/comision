<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Norm extends Model {
    use SoftDeletes;
    protected $fillable = [
        'codigo', 'titulo', 'direccion',
    ];

    public function requirements() {
        return $this -> hasMany('App\Requirement');
    }
}
