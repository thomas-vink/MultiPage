<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;
use App\Products;

class ShoppingCart
{

    public static function addToSession($id)
    {

        $product = Products::find($id);
        $currentCart = session('cart');
        $Cart = array();
        if (isset($currentCart)) {
            if (array_key_exists($id, $currentCart)) {
               if ($currentCart[$id] >= 1){
                   $newAmount = $currentCart[$id]+ 1;
                   $currentCart[$id] = $newAmount;
                   session(['cart' => $currentCart]);
               }
               else{
                   return response()->json(['succes' => 'error',]);
               }
            } else {
                $Cart = $currentCart + array ($id =>1);
                session(['cart' => $Cart]);
            }
        }
        else{
            $CartNew = array($id => 1);
            session(['cart' => $CartNew]);
        }


    }

    public static function DeleteFromSession($id)
    {
        $currentCart = session('cart');
        unset($currentCart[$id]);
        session(['cart' => $currentCart]);
        return redirect('/cart');
    }

    public static function getFromSession()
    {
        $viewData = array();
        $currentSession = session('cart');
        if (isset($currentSession)) {
            foreach ($currentSession as $key => $val) {
                $amount = $val;
                $item = Products::find($key);
                $item['amount'] = $amount;
                $item['Price'] = $item['Price'] * $amount;
                array_push($viewData, $item);

            }
        }
        else{
            die();
        }
        return View('Cart.index', compact(['viewData','currentSession']));

    }

    public static function changeAmountSession($id, $amount)
    {
        $currentSession = session('cart');
        if($currentSession[$id] == $amount){
            return redirect('/cart');
        }
        else{
            $currentSession[$id] = $amount;
            session(['cart' => $currentSession]);
            return redirect('/cart');
        }
    }



}
