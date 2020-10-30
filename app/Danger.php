<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Danger extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'titulo','tipo','activity_id'
    ];

    public function area() {
        return $this -> belongsTo('App\Activity') -> withTrashed();
    }
}
