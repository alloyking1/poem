<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $fillable=[
        'comment', 'post_id', 'user_id'
    ];


    // comment post relationship
    public function comment_post(){
        return $this->belongsTo('App\Product', 'post_id');
    }
}
