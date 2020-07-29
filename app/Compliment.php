<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compliment extends Model {
    use SoftDeletes;
    protected $fillable = [
        'evidencia','fecha','commitment_id',
    ];

    public function commitment() {
        return $this->belongsTo('App\Commitment')->withTrashed();
    }
}
