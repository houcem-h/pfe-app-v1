<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    // Table name
    protected $table = 'sections';

    //Foreign key
    public function classes()
    {
        return $this->hasMany('App\Classs');
    }
  
}
