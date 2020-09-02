<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HelperTraits;
use App\Product;
use App\Cathegory;
use App\Order;
use App\User;
use App\Like;
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
        // $PoemWriter = $cathegory->products->user_poem; //get user details from relationship
        // dd($PoemWriter)
        return view('user/Product',compact('content','cathegory'));
    }


    /**
     * Finds a single poem from product table
     * @param $request $id
     * @return 
     */
    public function SingleProduct(Request $request, $id){
        $id = $request->id;
        $singlePoem = Product::find($id);
        $PoemWriter = $singlePoem->poem_writer; //get user details from relationship

        return view('user/singleProduct', compact('singlePoem','id','PoemWriter'));
    }

    /**
     * handles upload of poem cover photo
     * @param $request 
     * @return path to image
     */
    public function PoemCoverPhotoUpload(Request $request){
        //get imge name with ext
        $filenameWithExt = $request->file('profile_pix')->getClientOriginalName();
        //jxt file name 
        $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //jxt ext
        $fileExtention = $request->file('profile_pix')->getClientOriginalExtension();
        //add unique to img
        $fileNameToStore = $fileName.'_'.time().'.'.$fileExtention;

        // dd($fileName);
        //store img
        $path = $request->file('profile_pix')->storeAs('public/storage/profile_pix', $fileNameToStore);
        
        return $fileNameToStore;
    }

    /**
     * inserts users poem into product table
     * @param $request 
     * @return view of home page
     */
    public function PoemUpload(Request $request){
        $order_id =  mt_rand(100000, 999999);
        $user_id = Auth::user()->id;
        // $ImgStorePath = $this->PoemCoverPhotoUpload($request);

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

    /**
     * check if user likes poem previously
     * @param poem $id
     * @return boolean
     */
    public function isLikedByMe($id)
    {
        $post = Post::findOrFail($id)->first();
        if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
            return 'true';
        }
        return 'false';
    }


    /**
     * Implement like logic
     * @param $post request
     * @return 
     */
    public function like(Post $post)
    {
        // $existing_like = Like::withTrashed()->wherePostId($post->id)->whereUserId(Auth::id())->first();

        // if (is_null($existing_like)) {
        //     Like::create([
        //         'post_id' => $post->id,
        //         'user_id' => Auth::id()
        //     ]);
        // } else {
        //     if (is_null($existing_like->deleted_at)) {
        //         $existing_like->delete();
        //     } else {
        //         $existing_like->restore();
        //     }
        // }

        $like = new Like;
        $like->user_id = $user_id;
        $like->poem_id = $poem_id;
        $like->save();

        return true;
    }

}
