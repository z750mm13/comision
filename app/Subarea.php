<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Target;

class Subarea extends Model {
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    protected $fillable = [
        'nombre', 'area_id',
    ];

    public function area() {
        return $this -> belongsTo('App\Area')->withTrashed();
    }

    public function targets() {
        return $this -> hasMany('App\Target');
    }

    public function arrays() {
        return $this -> hasMany('App\Matrix');
    }
    
    public function questionnaires() {
        return
        $this->hasManyDeepFromRelations($this->targets(), (new Target)->questionnaire());
    }
}
