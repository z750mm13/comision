<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model {
    use SoftDeletes;
    protected $fillable = [
        'requirement_id', 'cycle_id'
    ];

    public function requirement() {
        return $this -> belongsTo('App\Requirement');
    }

    public function cycle() {
        return $this -> belongsTo('App\Cycle');
    }
}
