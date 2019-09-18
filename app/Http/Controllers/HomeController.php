<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Cathegory;
use App\Order;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userOrders = $this->Orders();
        $cathegory = Cathegory::all();  
        return view('home',compact('cathegory','userOrders'));
    }

    public function Orders(){
        $user = Auth::user();
        $orders = $user->hasOrder;
        return $orders;
    }
}
