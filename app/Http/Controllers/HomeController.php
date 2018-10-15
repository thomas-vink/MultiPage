<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function index()
    {
        $Products['Products'] = DB::table('products')->get();
        return view('Home',$Products);

    }
    public function __construct()
    {
        //$this->middleware('auth');
    }

}
