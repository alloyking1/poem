<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;
use App\Order;

class Cathegory extends Model
{
    //

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }


}
