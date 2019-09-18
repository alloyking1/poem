<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HelperTraits;
use App\Product;
use App\Cathegory;
use App\Order;
use Auth;

class ProductsController extends Controller
{
    /**
     * check for traits
     * @param App\Traits\HelperTraits
    */
    use HelperTraits;

    /**
     * gets all cathegories of poems available
     * @param $request $id
     * @return 
     */
    public function Allproduct(Request $request, $id){
        $id = $request->id;
        $cathegory = Cathegory::find($id);
        $content = $cathegory->products;
        return view('user/Product',compact('content'));
    }


    /**
     * gets all cathegories of poems available
     * @param $request $id
     * @return 
     */
    public function SingleProduct(Request $request, $id){
        $id = $request->id;
        return view('user/singleProduct', compact('id'));
    }

    /**
     * inserts users poem into product table
     * @param $request 
     * @return view of home page
     */
    public function PoemUpload(Request $request){
        $order_id =  mt_rand(100000, 999999);
        $user_id = Auth::user()->id;

        if($this->ValidateOrder($request)){

            $product = new Product;
            $product->user_id = $user_id;
            $product->order_id = $order_id;
            $product->cathegory_id = $request->cathegory;
            $product->title = $request->title;
            $product->content = $request->content;
            $product->save();
            return redirect('/home');
        }
        
    }

}
