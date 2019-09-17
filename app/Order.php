<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cathegory;

class Order extends Model
{
    //
    public function Order_cathegory(){
        $this->belongsTo('App\Cathegory', 'cathegory_id');
    }

    public function BelongsToUser(){
       return $this->belongsTo('App\User');
    }
}
