<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    //Table name
    protected $table = 'classes';

    ////Foreign key
    public function sections()
    {
        return $this->belongsTo('App\Section');
    }
    
    public function inscription(){
        return $this->hasMany('App\Inscription');
    }
}
