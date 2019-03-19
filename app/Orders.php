<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
class Orders extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Products');
    }
}
