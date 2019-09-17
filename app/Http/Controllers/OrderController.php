<?php

namespace App\Http\Controllers;

use App\Traits\HelperTraits;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Auth;


class OrderController extends Controller
{
    /**
     * check for traits
     * @param App\Traits\HelperTraits
    */
    use HelperTraits;
    // use PaymentTraits;

    public function OrderProduct(Request $request){
        $id = $request->id;
        $cathegory = Product::find($id);
        $name = $cathegory->name;
        $order_id =  mt_rand(100000, 999999);
        $path = $request->file('file_name')->store('public/payment_img');
        $user_id = Auth::user()->id;

        if($this->ValidateOrder($request)){

            $order = new Order;
            $order->cathegory_id = $cathegory->id;
            $order->user_id = $user_id;
            $order->order_code = $order_id;
            $order->name = $name;
            $order->description = $request->text;
            $order->file = $path;
            $order->save();
            return response();
        }
    }


}
