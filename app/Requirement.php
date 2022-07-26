<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requirement extends Model {
    use SoftDeletes;
 
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'norm_id', 'numero', 'descripcion','frecuencia','tipo',
    ];

    public function norm() {
        return $this -> belongsTo('App\Norm');
    }

    public function questionnaires() {
        return $this -> hasMany('App\Questionnaire');
    }

    public function tasks() {
        return $this -> hasMany('App\Task');
    }

    public function activities() {
        return $this -> hasMany('App\Activity');
    }
}
