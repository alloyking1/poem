<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cathegory;

class Product extends Model
{
    //relationship with cathegory
    public function product_cathegory(){
        $this->belongsTo('App\Cathegory', 'cathegory_id');
    }

    //relationship with user
    public function user_poem(){
        $this->belongsTo('App\User', 'user_id');
    }

}
