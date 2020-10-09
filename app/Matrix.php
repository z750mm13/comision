<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matrix extends Model {
    use SoftDeletes;
    protected $table = 'arrays';

    protected $fillable = [
        'subarea_id','activity_id',
    ];

    public function subarea() {
        return $this -> belongsTo('App\Subarea')->withTrashed();
    }

    public function activity() {
        return $this -> belongsTo('App\Activity');
    }
    //Todo completar
    //public function reviews() {
        //return $this -> hasMany('App\Review');
    //}
}
