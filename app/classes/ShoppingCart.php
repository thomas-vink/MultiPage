<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;
use App\Products;

class ShoppingCart
{

    public static function addToSession($id)
    {

        $product = Products::find($id);
        $Name = $product->Name;
        $currentCart = session('cart');
        $Cart = array();
        if (isset($currentCart)) {
            if (array_key_exists($Name, $currentCart)) {
               if ($currentCart[$Name] >= 1){
                   $newAmount = $currentCart[$Name]+ 1;
                   $currentCart[$Name] = $newAmount;
                   session(['cart' => $currentCart]);
               }
               else{
                   return response()->json(['succes' => 'error',]);
               }
            } else {
                $Cart = $currentCart + array ($Name =>1);
                session(['cart' => $Cart]);
            }
        }
        else{
            $CartNew = array($Name => 1);
            session(['cart' => $CartNew]);
        }


    }
    public static function GetFromSession(){
        $currentSession = session('cart');


        return View('Cart.index')->with('ShoppingCart', $currentSession);

    }



}
