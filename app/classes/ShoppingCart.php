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
            session(['cart' => $CurrentSession, $data1]);
        }
        else{
            $data2 = array(
                'id' => $id,
                'amount' => '1'
            );
            session(['cart' => $CurrentSession, $data2]);
        }
    }

}
