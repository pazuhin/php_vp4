<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function prod()
    {
        return $this->hasMany('App\Products');
    }
}
