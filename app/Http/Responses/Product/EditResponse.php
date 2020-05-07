<?php 
namespace App\Http\Responses\Product;

use Redirect;
use App\Models\Product;
use App\Kategori;
use App\TahunProduksi;
use App\Merk;
use App\JarakTempuh;
use App\Subkategori;
use App\Models\Warna;
use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{

	private $id;

	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$kategoris 			= Kategori::all();
		$subkategoris 		= Subkategori::all();
		$transmisis 		= Transmisi::all();
		$product 			= Product::findOrFail($this->id);
		return view('dashboard.product.edit',[
			'product' 				=> $product,
			'kategoris' 			=> $kategoris,
			'subkategoris' 			=> $subkategoris,
			'transmisis' 			=> $transmisis
		]);
	}
}