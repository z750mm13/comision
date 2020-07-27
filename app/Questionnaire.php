<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionnaire extends Model {
    use SoftDeletes;
    protected $fillable = [
        'tipo', 'requirement_id','descripcion'
    ];

    public function requirement() {
        return $this -> belongsTo('App\Requirement');
    }

    public function questions() {
        return $this -> hasMany('App\Question');
    }
}