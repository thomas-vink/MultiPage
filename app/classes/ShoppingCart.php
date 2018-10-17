<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;

class ShoppingCart
{
    public static function addToSession($id)
    {
        Session::push('cart', $id);



        return response()->json([
            'succes' => 'Succes',
            'id' => $id,
        ]);

    }

    public static function deleteFromSession()
    {

    }

}