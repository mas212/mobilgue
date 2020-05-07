<?php
namespace App\Http\Responses\Product;

use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$products 			= Product::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.product.index',[
			'products' 		=> $products
		]);
	}
}