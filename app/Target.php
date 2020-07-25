<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Target extends Model {
    use SoftDeletes;
    protected $fillable = [
        'ciclo','subarea_id','questionnaire_id',
    ];

    public function subarea() {
        return $this -> belongsTo('App\Subarea');
    }

    public function questionnaire() {
        return $this -> belongsTo('App\Questionnaire');
    }

    public function reviews() {
        return $this -> hasMany('App\Review');
    }
}
