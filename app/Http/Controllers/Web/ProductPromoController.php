<?php

namespace App\Http\Controllers\Web;

use App\Kategori;
use App\Models\product;
use App\Models\ProductPromo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductPromoController extends Controller
{
    public function getPromoDetail($id){
    	$productPromo 			= ProductPromo::findOrFail($id);
    	$productRecomendations    = Product::orderByRaw("RAND()")->orderBy('created_at', 'desc')->take(6)->get();
    	$kategoris 				= Kategori::all();
    	return view('web.promo.detail', [
    		'productPromo' 		=> $productPromo,
    		'productRecomendations'	=> $productRecomendations,
    		'kategoris' 		=> $kategoris
    	]);

    }
}
