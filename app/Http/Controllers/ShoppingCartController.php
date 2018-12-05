<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\ShoppingCart;
use App\Products;
use App\Order;
use Illuminate\Support\Facades\Auth;



class ShoppingCartController extends Controller
{
    public function index()
    {
        if(Auth::guest())
        {
            return redirect('/login');
        }else{
            return ShoppingCart::GetFromSession();
        }
    }

    public function AddToCart(Request $request)
    {
        $id = $request->input('id');
        return ShoppingCart::addToSession($id);
    }

    public function DeleteSession($id)
    {
        return ShoppingCart::DeleteFromSession($id);
    }

    public function changeAmount(Request $request, $id){

        $amount = $request->input('quantity');
        return ShoppingCart::changeAmountSession($id, $amount);
    }

    public function killsession(Request $request)
    {
        $request->session()->flush();
        return redirect('');
    }


}
