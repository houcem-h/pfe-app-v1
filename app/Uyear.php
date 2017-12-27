<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uyear extends Model
{
    //Table name
    protected $table = 'uyear';

    ////Foreign key
    public function inscription(){
        return $this->hasMany('App\Inscription');
    }
}
