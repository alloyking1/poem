<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cathegory;

class Product extends Model
{
    //
    public function product_cathegory(){
        $this->belongsTo('App\Cathegory', 'cathegory_id');
    }
}
