<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cathegory;


class ProductsController extends Controller
{

    public function Allproduct(Request $request, $id){
        $id = $request->id;
        $cathegory = Cathegory::find($id);
        $content = $cathegory->products;
        return view('user/Product',compact('content'));
    }

    public function SingleProduct(Request $request, $id){
        $id = $request->id;
        return view('user/singleProduct', compact('id'));
    }

}
