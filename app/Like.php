<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    public function user(){
        return $this->belongsTo('AppUser');
    }

    public function post(){
        return $this->belongsTo('AppPost');
    }
}
