<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cathegory;

class LandingController extends Controller
{
    /**
     * handles all actions of the landing page
     * 
     */

    public function index(){
        $cathegory = Cathegory::all(); 
        return view('welcome',compact('cathegory'));
    }
}
