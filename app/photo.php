<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
    public function imageable(){
        return $this->morphTo();
    }
}
//bdal ma a3mal l kol table table l photos a3mal wa7da w a7ot laha type anha tb3 l model da w hwa hygbha b id b3d ma y3mr asdi anhy model

//how to get owner of the photo
