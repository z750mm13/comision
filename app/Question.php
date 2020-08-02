<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model {
    use SoftDeletes;
    protected $fillable = [
        'encabezado','questionnaire_id',
    ];

    public function questionnaire() {
        return $this -> belongsTo('App\Questionnaire')->withTrashed();
    }

    public function reviews() {
        return $this -> hasMany('App\Review');
    }
}
