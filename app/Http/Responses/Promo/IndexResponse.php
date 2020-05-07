<?php
namespace App\Http\Responses\Promo;

use App\Models\ProductPromo;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$product_promos 			= ProductPromo::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.promo.index',[
			'product_promos' 		=> $product_promos
		]);
	}
}