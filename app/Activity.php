<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'titulo','descripcion'
    ];

    public function dangers() {
        return $this->hasMany('App\Danger');
    }
}
