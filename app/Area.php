<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Area extends Model {
    use SoftDeletes;
 
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre', 'area', 'color'
    ];
    public function subareas() {
        return $this->hasMany('App\Subarea');
    }
}
