<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\classes\ShoppingCart;
use App\Products;
use DB;
use App\order;
use App\category;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

    public function getOrders()
    {
        $userId = Auth::user()->id;
        $orders = Order::where('user_id', $userId)->get();
        $Products = Products::all();
        return view('Orders.index',compact('orders','Products'));
    }

    public function getDetails($id)
    {
        $Products = Products::all();
        $orders = Order::where('id', $id)->get();
        $ordersarray = array();
        foreach($orders as $order){
            $o = unserialize($order['cart']);
            $ordersarray = $o;

        }
        return view('Orders.details',compact('ordersarray','Products'));
    }

    public function save()
    {
        $cart = session('cart');
        try{
            $order = new Order();
            $order->cart = serialize($cart);
            Auth::user()->orders()->save($order);
            return redirect('/');
        } catch (\Exception $error){
            return redirect()->route('checkout')->with('error',$error->getMessage());
        }


    }
}
