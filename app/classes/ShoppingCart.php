<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;

class ShoppingCart
{

    public static function addToSession($id)
    {
         $TestData = array(
             'Product1'=>array('id'=>'1','amount'=>'3'),
             'Product2'=>array('id'=>'2','amount'=>'2')
         );
        session(['cart' => $TestData]);
    }
    public static function GetFromSession(){
        $currentSession = session('cart');


        return View('Cart.index')->with('ShoppingCart', $currentSession);

    }



}
