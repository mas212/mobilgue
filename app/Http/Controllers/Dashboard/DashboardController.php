<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(){
    	$products 		= Product::all()->count();
    	return view('dashboard.dashboard.index',[
    		'products' 	=> $products
    	]);
    }
}
