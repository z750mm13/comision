<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model {
    use SoftDeletes;
    protected $fillable = [
        'valor','descripcion','evidencia','question_id','target_id', 'validity_id'
    ];

    public function validity() {
        return $this -> belongsTo('App\Validity')->withTrashed();
    }

    public function target() {
        return $this -> belongsTo('App\Target')->withTrashed();
    }

    public function question() {
        return $this -> belongsTo('App\Question')->withTrashed();
    }

    public function commitments() {
        return $this -> hasMany('App\Commitment');
    }
}
