<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\MyResetPassword;
use App\Notifications\MyVerifyEmail;

class User extends Authenticatable  implements MustVerifyEmail {
    use Notifiable;
    use SoftDeletes;

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

    public function sendPasswordResetNotification($token) {
        $this->notify(new MyResetPassword($token));
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new MyVerifyEmail);
    }
}
