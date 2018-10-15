<?php
namespace App\Libraries;
use Illuminate\Http\Request;

class cart {

	public $items;   // ['3'=>1, '8'=>2 ]
	public $total;   // 3

	public function __construct() {
		$items = [];
		$total = 0;

		$cart = session('cart');
		if ( isset($cart) && is_array($cart) ) {
				foreach($cart as $item) {
					if(array_key_exist($item, $items)) {
						$items[$item] = $items[$item] + 1;
					} else {
						$items[$item] = 1;
					}
				}
		} else {
			// demo vulling
			$items = [ '3'=>1, '8'=>2 ];
			$total = 2;
		}
	}

	public static function ReturnCart()
	{
		return $request->session('cart');

	}
}
