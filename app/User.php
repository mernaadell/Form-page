<?php

namespace App;
use app\post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
//    public function post(){
//        return $this->hasOne("App\post");
//    }
    //oneto many
    public function posts(){
        return $this->hasmany("App\post");
    }
    //many to many
//    public function roles(){
//        return $this->belongsToMany("App\\role");
//    }
//    public function photos(){
//        return $this->morphMany("App\photo","imageable");
//    }
//accessor
public function getNameAttribute($value){
    return ucfirst($value);
}
//mutatuor
    public function setNameAttribute($value){
        $this->attributes['name']=ucfirst($value);
    }
 //query scope
    public static function  scopeLatest($query){
        return $query->orderBy('id','asc')->get();
    }
}

