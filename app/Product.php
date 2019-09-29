<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cathegory;

class Product extends Model
{
    //relationship with cathegory
    public function product_cathegory(){
        return $this->belongsTo('App\Cathegory', 'cathegory_id');
    }

    //relationship with user
    public function poem_writer(){
        return $this->belongsTo('App\User', 'user_id');
    }

    // post like relationship
    public function get_post_like(){
        return $this->hasMany('App\Like', 'post_id');
    }
}
