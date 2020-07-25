<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commitment extends Model {
    use SoftDeletes;
    protected $fillable = [
        'accion','fecha_cumplimiento','review_id','helper_id',
    ];

    public function helper() {
        return $this->belongsTo('App\Helper');
    }

    public function review() {
        return $this->belongsTo('App\Review');
    }

    public function compliment() {
        return $this->hasOne('App\Compliment');
    }
}
