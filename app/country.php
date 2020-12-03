<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    public function posts(){
        return $this->hasManyThrough("App/post",'App/User');
        //country_id da gwa l user
        //user->   country   user-> post
        //post->country through user

    }
}
