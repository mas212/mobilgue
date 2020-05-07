<?php
namespace App\Http\Responses\Product;

use App\Kategori;
use App\Subkategori;
use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{

	public function toResponse($request){
		$kategoris 		= Kategori::all();
		$subkategoris 	= Subkategori::all();
		$transmisis 	= Transmisi::all();
		return view('dashboard.product.create',[
			'kategoris' 			=> $kategoris,
			'subkategoris' 			=> $subkategoris,
			'transmisis' 			=> $transmisis
		]);
	}
}