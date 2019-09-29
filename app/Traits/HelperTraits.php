<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait HelperTraits{

    /**
     *cool substite to inheritance
     *Helper methods lives here
    */

    public function ValidateOrder(Request $request){
        return Validator::make($request->all(),[
            'text' => 'required | sring',
            // 'file' => 'required'
        ]);
    }

    public function ValidateImage(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
    }
    /**
     * Handles image upload function
     * @param request of file content
     * @return path to image upload file
     */

    public function UploaImage(Request $request, $file_name = null){
        $ImgPath = $request->file($file_name)->store('public/storage/profile_pix');
        return $ImgPath;
    }

}
