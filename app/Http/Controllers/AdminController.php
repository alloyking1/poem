<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class AdminController extends Controller
{

    public function test(){
        return "all good";
    }

    protected function getOrders(){
        $allOrders = Order::all();
        return $allOrders;
    }

    protected function getOrder($id){
        $order = Order::find($id);
        return $order;
    }

    protected function getOrderOwner($userId){
        $user = User::find($userId);
        return $user;
    }

    public function index(){
        $activeOrders = $this->getOrders();
        return view('admin/home', compact('activeOrders'));
    }

    public function showOrder(Request $request){
        $id = $request->id;
        $order = $this->getOrder($id);
        $userId = $order->user_id;
        $orderOwner = $this->getOrderOwner($userId);
        return view('admin/singleOrder', compact('order','orderOwner'));
    }

    public function declineOrder(Request $request){
        $orderId = $request->id;
        $decline = Order::find($orderId)->delete();
        return view('admin/home')->with('success',"order declined");
    }

}
