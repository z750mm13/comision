<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model {
    protected $fillable = [
        'documento', 'titulo', 'descripcion','visible','user_id'
    ];

    public function user() {
        return $this -> belongsTo('App\User');
    }
}
