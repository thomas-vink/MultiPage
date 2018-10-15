<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\cart;

class ShoppingCartController extends Controller
{
		public function index()
		{
			return view('Cart');
		}

    public function AddToCart(Request $request)
    {
			$cart = $request->session()->get('cart');
			$input = $request->input('id');

			if($cart == null) {
				$cart = [
					$input=>1
				];
			} else {
				if (isset($cart[$input])) {
						$cart[$input] = $cart[$input] + 1;
					} else {
						$cart[$input] = 1;
					}

			}

			//$cart->id = $request->input('id');

			$request->session()->put('cart', $cart);

	     return response()->json(['success'=>'Got Simple Ajax Request: ']);
		 }

		 public function killsession(Request $request) {
			 $request->session()->flush();
			 return redirect('');
		 }
}
