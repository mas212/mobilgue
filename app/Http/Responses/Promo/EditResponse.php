<?php
namespace App\Http\Responses\Promo;

use App\Models\ProductPromo;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{

	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$product_promo 			= ProductPromo::findOrFail($this->id);
		return view('dashboard.promo.edit',[
			'product_promo' 	=> $product_promo
		]);
	}
}