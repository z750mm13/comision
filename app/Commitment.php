<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commitment extends Model {
    use SoftDeletes;
    protected $fillable = [
        'accion','fecha_cumplimiento','review_id','user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function review() {
        return $this->belongsTo('App\Review')->withTrashed();
    }

    public function compliment() {
        return $this->hasOne('App\Compliment');
    }
}
