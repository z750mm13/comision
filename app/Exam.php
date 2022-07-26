<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model {
    use SoftDeletes;
    protected $fillable = [
        'exposicion','ocurrencia','personas','consecuencia_persona','consecuencia_salud','consecuencia_infraestructura','danger_id','evaluation_id','array_id'
    ];
    //

    public function danger() {
        return $this -> belongsTo('App\Danger')->withTrashed();
    }

    public function evaluation() {
        return $this -> belongsTo('App\Evaluation')->withTrashed();
    }

    public function matrix() {
        return $this -> belongsTo('App\Matrix')->withTrashed();
    }
}
