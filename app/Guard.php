<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guard extends Model {
    use SoftDeletes;
    protected $fillable = [
        'cordinate_id', 'area_id'
    ];
    
    public function cordinate() {
        return $this->belongsTo('App\Cordinate')->withTrashed();
    }

    public function area() {
        return $this->belongsTo('App\Area')->withTrashed();
    }
}
