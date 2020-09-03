<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cathegory;
use App\Product;

class LandingController extends Controller
{
    /**
     * Displays landing page template for vue.js
     * 
     */

    public function index(){
        $cathegory = Cathegory::all();
        return view('welcomeBlade',compact('cathegory'));
    }

    /**display the about page */
    public function about(){
        return "true";
    }

    /**display the contact page */
    public function contact(){
        return "true";
    }
    /**display the privacy policy page */
    public function privacy(){
        return "true";
    }

    /**
     * gets all cathegories
     * @param $request $id
     * @return 
     */
    public function category(){
        $cathegory = Cathegory::all(); 
        return response()->json($cathegory, 200);
    }

    /**
     * gets all post belonging to a chategory
     * @param $request $id
     * @return 
     */
    public function categoryPost(Request $request){
        $id = $request->id;
        $singlePoem = Product::find($id);
        return response()->json($singlePoem, 200);
    }

    /**
     * gets a full post and comments
     * @param $request $id
     * @return 
     */

    public function SinglePost(Request $request){
        $id = $request->id;
        $singlePoem = Product::find($id);
        $PoemWriter = $singlePoem->poem_writer; //get user details from relationship
        return response()->json($singlePoem, 200);
    }


    /**
     * Like a particular post
     */

    public function like(Request $request){
        $id = $request->id;
        $singlePoem = Product::find($id);
        if($singlePoem->like === NULL){
            $singlePoem->like = '1';
            $singlePoem->save();
            return response()->json($singlePoem, 200);
        }else{

            $singlePoem->like = $singlePoem->like + 1;
            $singlePoem->save();
            return response()->json($singlePoem, 200);
        }
    }

}
