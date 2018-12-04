<?php

namespace App\Http\Controllers;

use App\classes\ProductDetails;
use Illuminate\Http\Request;
use DB;
use App\Products;

class HomeController extends Controller
{
    public function GetProducts()
    {
        $Products['Products'] = DB::table('products')->paginate(10);
        return view('Home.index',$Products);

    }
    public function Category(Request $request){
        $id = $request->input('category');
        if ($id === null){
            $Products['Products'] = DB::table('products')->paginate(10);
            return view('Home.index',$Products);
        }
        else{
            $Products = Products::where('category', $id)->paginate(10);
            return view('Home.index',['Products' => $Products]);
        }
    }
    public function GetDetails($id){
        $product = Products::find($id);
        return view('Home.Details')->with('products', $product);
    }

}
