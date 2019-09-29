<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;
use App\Order;

class Cathegory extends Model
{
    //relationship with product
    public function products(){
        return $this->hasMany('App\Product');
    }

    //relationship with order
    public function orders(){
        return $this->hasMany('App\Order');
    }


}
