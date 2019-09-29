<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HelperTraits;
use App\User;
use App\Product;
use Auth;

class ProfileController extends Controller

{

    use HelperTraits; //nw istance of trait


    /**
     * Controller handles all user profile functionality
     */

    public function index(){
        $AllUserPoems = $this->UserPoems();
        $UserPoems = $AllUserPoems->UserPoems->all(); //all user poems from relationship
        return view('user/Profile', compact('UserPoems'));
    }

    public function UserPoems(){
        $AllUserPoems = User::find(Auth()->user()->id);
        $AllUserPoems->UserPoems;
        return $AllUserPoems;
    }


    /**
     *profile img upload
     *@param $request
     *@return view with img 
     */ 
    public function UploadProfilePix(Request $request){

        // $this->validate(request(), [
        //     'profile_pix' => 'required|image|max:jpeg,png,jpg,gif,svg,1999',
        // ]);

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
        
        //find user by user id in invest table
        $user_id = auth::user()->id;
        $DpSave = User::find($user_id);
        $DpSave->profile_pix = $fileNameToStore;
        $DpSave->save();
        
        return redirect('user/profile');
    }
}
