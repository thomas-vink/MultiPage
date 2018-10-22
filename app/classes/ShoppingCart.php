<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;

class ShoppingCart
{

    public static function addToSession($id)
    {
        $CurrentSession = session('cart');
        $CurrentSessionAmount = $CurrentSession['amount'];

        if ($CurrentSession['id'] == $id) {
            $newSessionAmount = $CurrentSessionAmount + 1;
            $data1 = array(
                'id' => $id,
                'amount' => $newSessionAmount
            );
            session(['cart' => $data1]);
        }
        else{
            $data2 = array(
                'id' => $id,
                'amount' => '1'
            );
            session(['cart' => $data2, $CurrentSession]);
        }
    }
    public static function GetFromSession(){

    $CartArray = array(
        'id' => 'test1',
        'test' => 'test2'
    );

        return response()->json([
            $CartArray
        ]);

    }



}
