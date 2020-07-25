<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Validity extends Model {
    use SoftDeletes;
    protected $fillable = [
        'inicio','fin',
    ];

    public function reviews() {
        return $this -> hasMany('App\Review');
    }

    public function questions() {
        return $this -> hasMany('App\Question');
    } 
}
