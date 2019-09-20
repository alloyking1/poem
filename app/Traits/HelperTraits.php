<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait HelperTraits{

    /**
     *cool substite to inheritance
     *Helper methods live here
    */

    public function ValidateOrder(Request $request){
        return Validator::make($request->all(),[
            'text' => 'required | sring',
            // 'file' => 'required'
        ]);
    }

}
