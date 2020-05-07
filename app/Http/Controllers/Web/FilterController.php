<?php

namespace App\Http\Controllers\Web;

use Redirect; 
use App\Kategori;
use App\Subkategori;
use App\Models\Product;
use App\Models\Transmisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
   public function filterSubkategoris($id){
   		$productFilterSubcategoris 		= Product::orderBy('created_at', 'DESC')
   													->whereHas('subkategori', function($query) use ($id){
   														$query->where('subcat_id', $id);
   													})
   													->paginate(10);
   		$subkategoris           		= Subkategori::all();
   		$kategoris 							= Kategori::all();
         $transmisi                    = Transmisi::all();
   		return view('web.filter.subcategoris',[
   			'productFilterSubcategoris'  => $productFilterSubcategoris,
   			'subkategoris'					  => $subkategoris,
   			'kategoris'						  => $kategoris,
            'transmisi'                  => $transmisi,
            'productCount'               => $productCount
   		]);
   }

   public function filterTransmisi($id){
      $subkategoris                 = Subkategori::all();
         $kategoris                    = Kategori::all();
         $productFilterSubcategoris       = Product::orderBy('created_at', 'DESC')
                                          ->whereHas('subkategori', function($query) use ($id){
                                             $query->where('subcat_id', $id);
                                          })
                                          ->paginate(10);
         

         $productFilterTransmisi       = Product::orderBy('created_at', 'DESC')
                                                ->where('transmisi_id', $id)->paginate(10);
         //dd($productFilterTransmisi);
         $transmisi                    = Transmisi::all();

         return view('web.filter.transmisi',[
            'subkategoris'                => $subkategoris,
            'kategoris'                   => $kategoris,
            'productFilterSubcategoris'   => $productFilterSubcategoris,
            'productFilterTransmisi'      => $productFilterTransmisi,
            'transmisi'                   => $transmisi
         ]);
   }
}
