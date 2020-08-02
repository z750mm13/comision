<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cordinate extends Model {
    use SoftDeletes;
    protected $fillable = [
        'rol', 'ciclo', 'user_id'
    ];
    public function user() {
        return $this->belongsTo('App\User')->withTrashed();
    }
    public function guards() {
        return $this->hasMany('App\Guard');
    }
}
