<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    //Table name
    protected $table = 'inscription';

    ////Foreign key
    public function student(){
        return $this->belongsTo('App\User');
    }
    public function classs(){
        return $this->belongsTo('App\Classs');
    }
    public function uyear(){
        return $this->belongsTo('App\Uyear');
    }
}
