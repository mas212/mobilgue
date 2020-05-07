<?php

namespace App\Http\Controllers\Web;

use Redirect; 
use App\Kategori;
use App\Models\Product;
use App\Subkategori;
use App\Models\Transmisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductListController extends Controller
{
    protected $limit = 6;

    public function getProducts($id){
    	$kategoris 				= Kategori::all();
    	$products 				= Product::orderBy('created_at', 'DESC')
    									->where('kategori_id', $id)
    									->paginate(10);
        
        $subkategoris           = Subkategori::all();
        $transmisi              = Transmisi::all();
    	return view('web.product.index',[
    		'kategoris'  		=> $kategoris,	
    		'products' 			=> $products,
            'subkategoris'      => $subkategoris,
            'transmisi'         => $transmisi
    	]);
    }

    public function getProductDetail($id){
    	$kategoris 				= Kategori::all();
    	$product 				= Product::orderBy('created_at', 'DESC')
    									->with('kategori')
    									->findOrFail($id);
        $productRecomendations    = Product::orderByRaw("RAND()")->orderBy('created_at', 'desc')->take($this->limit)->get();
    	return view('web.product.detail', [
    		'kategoris'			=> $kategoris,
    		'product' 			=> $product,
            'productRecomendations' => $productRecomendations
    	]);
    }

}
