<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cathegory;

class LandingController extends Controller
{
    /**
     * Displays landing page template for vue.js
     * 
     */

    public function index(){
        $cathegory = Cathegory::all(); 
        return view('welcome',compact('cathegory'));
    }

    public function category(){
        $cathegory = Cathegory::all(); 
        return response()->json($cathegory, 200);
    }
}
