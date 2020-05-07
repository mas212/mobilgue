<?php

namespace App\Http\Controllers\Web;

use App\Kategori;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductPromo;
use App\Models\Benner;
use App\TahunProduksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	$kategoris 			= Kategori::all();
    	$products 			= Product::all();
        $benners            = Benner::orderBy('created_at', 'DESC')
                                            ->paginate(1);
        $productPromos      = ProductPromo::orderBy('created_at', 'DESC')
                                        ->take(6)->get();
    	return view('web.home.index',[
    		'products' 			=> $products,
    		'kategoris' 		=> $kategoris,
            'benners'           => $benners,
            'productPromos'     => $productPromos
    	]);
    }

    public function details($id){
    	$kategoris 			= Kategori::all();
    	$product 			= Product::where('id', $id)->firstOrFail();
        $productImage      = ProductImage::where('product_id', $product->id)->firstOrFail();
        //dd($productImage->photo_1);
        $productRecomendations    = Product::orderByRaw("RAND()")->orderBy('created_at', 'desc')->take(6)->get();
    	return view('web.home.detail',[
    		'kategoris'		=> $kategoris,
    		'product' 		=> $product,
            'productImage'  => $productImage,
            'productRecomendations' => $productRecomendations
    	]);
    }
}
