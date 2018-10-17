<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\ShoppingCart;

class ShoppingCartController extends Controller
{
    public function index()
    {
        ShoppingCart::addToSession();

    }

    public function AddToCart(Request $request)
    {
        $id = $request->input('id');
        return ShoppingCart::addToSession($id);
    }

    public function DeleteFromCart()
    {

    }

    public function killsession(Request $request)
    {
        $request->session()->flush();
        return redirect('');
    }
}
