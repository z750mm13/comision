<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subarea extends Model {
    use SoftDeletes;
    protected $fillable = [
        'nombre', 'area_id',
    ];

    public function area() {
        return $this -> belongsTo('App\Area');
    }

    public function targets() {
        return $this -> hasMany('App\Target');
    }
}
