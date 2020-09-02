<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cathegory;
use App\Comment;

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

    // fetch comments
    public function poem_comment(){
        return $this->hasMany('App\Comment', 'post_id');
    }

}
