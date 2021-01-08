<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\MyResetPassword;
use App\Notifications\MyVerifyEmail;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable  implements MustVerifyEmail {
    use Notifiable;
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos','email', 'password', 'active', 'admin', 'foto', 'tipo', 'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cordinates() {
        return $this->hasMany('App\Cordinate');
    }

    public function commitments() {
        return $this->hasMany(Commitment::class);
    }

    public function guards() {
        return $this->hasManyThrough('App\Guard', 'App\Cordinate');
    }

    public function areas() {
        return
        $this->hasManyDeepFromRelations($this->guards(), (new Guard)->area());
    }

    public function subareas() {
        return
        $this->hasManyDeepFromRelations($this->areas(), (new Area)->subareas());
    }

    public function targets() {
        return
        $this->hasManyDeepFromRelations($this->subareas(), (new Subarea)->targets());
    }

    public function questionnaires() {
        return
        $this->hasManyDeepFromRelations($this->targets(), (new Target)->questionnaire());
    }

    public function questions() {
        return
        $this->hasManyDeepFromRelations($this->questionnaires(), (new Questionnaire)->questions());
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new MyResetPassword($token));
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new MyVerifyEmail);
    }
}
