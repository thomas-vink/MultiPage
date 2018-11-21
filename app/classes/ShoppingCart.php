<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;

class ShoppingCart
{

    public static function addToSession($id)
    {



        session(['cart' => $Cart]);

    }
    public static function GetFromSession(){
        $currentSession = session('cart');


        return View('Cart.index')->with('ShoppingCart', $currentSession);

    }



}
