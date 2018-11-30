<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\ShoppingCart;
use App\Products;


class ShoppingCartController extends Controller
{
    public function index()
    {
        return ShoppingCart::GetFromSession();


    }

    public function AddToCart(Request $request)
    {
        $id = $request->input('id');


        return ShoppingCart::addToSession($id);
    }

    public function DeleteFromCart()
    {

    }

    public function changeAmount(Request $request, $id){

        $amount = $request->input('quantity');

        return ShoppingCart::changeAmountClass($id, $amount);

    }

    public function getFromCart(){

        $oldcart = Session::get('cart');

    }
    public function killsession(Request $request)
    {
        $request->session()->flush();
        return redirect('');
    }
}
