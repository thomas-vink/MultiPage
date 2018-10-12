<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
	public function index()
	{
		return view ('Cart');
	}

    public function AddToCart(Request $request)
    {

		$input = $request->input('id');
		
		$request->session()->put('cart', $input);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
        
		
	}
}
