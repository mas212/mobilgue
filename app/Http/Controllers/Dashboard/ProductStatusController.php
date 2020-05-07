<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductStatusController extends Controller
{
	public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function getProductStatus(Request $request, $id){
    		$product 				= Product::findOrFail($id);
    		$product->status_jual 	= $request->status_jual;
    		$product->update();
    		return redirect()->back();
    }
}
