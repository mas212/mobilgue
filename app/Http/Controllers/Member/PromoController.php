<?php

namespace App\Http\Controllers\Member;

use Redirect;
use App\Models\ProductPromo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$productPromo 				= ProductPromo::orderBy('created_at', 'DESC')
    												->take(6)->get();
    	return view('member.promo.index',[
    		'productPromo' 			=> $productPromo
    	]);
    }
}
