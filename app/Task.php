<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model {
    use SoftDeletes;
    protected $fillable = [
        'programable','descripcion','inicio','fin','cumplida','evidencia','postdescripcion','requirement_id','user_id'
    ];
    //

    public function requirement() {
        return $this -> belongsTo('App\Requirement')->withTrashed();
    }

    public function user() {
        return $this -> belongsTo('App\User')->withTrashed();
    }
}
