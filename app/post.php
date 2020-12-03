<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $fillable=["content","id"];
    public function user(){
        return $this->belongsTo("App\User");
    }
//    public function photos(){
//        return $this->morphMany("App\photo","imageable");
//    }
    public function tags(){
        return $this->morphToMany("App\\tag","taggable");
   }
}