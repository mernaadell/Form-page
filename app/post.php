<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $fillable=["content","id","path"];
    public function user(){
        return $this->belongsTo("App\User");
    }
//    public function photos(){
//        return $this->morphMany("App\photo","imageable");
//    }
    public function tags(){
        return $this->morphToMany("App\\tag","taggable");
   }
   public function getPathAttribute($value){
        return "/images/".$value;
   }
}
