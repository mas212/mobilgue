<?php

namespace App\Http\Controllers\Web;

use Redirect; 
use App\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterSearchController extends Controller
{
    public function getSearch(Request $request){
        $search_nama            =  $request->search_nama;
        $products               =  Product::where('nama', 'like', "%".$search_nama."%")
        									->paginate(10);
        $kategoris 				= Kategori::all();
        return view('web.filter.search',[
        	'products' 			=> $products,
        	'kategoris' 		=> $kategoris
        ]);
    }
}
