<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cycle extends Model {
    use SoftDeletes;
    protected $fillable = [
        'inicio','fin','codigo','descripcion'
    ];

    public function goals() {
        return $this -> hasMany('App\Goal');
    }
}
