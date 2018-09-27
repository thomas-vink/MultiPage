<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function AddToCart(Request $request)
    {

		$data = $request->all(); 
		$id = $request->id;
		Session::put('cart', $data);	
		return response()->json([
    		'message' => ,
		]);
        
		
	}}
