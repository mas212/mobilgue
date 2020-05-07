<?php
namespace App\Http\Responses\ProductImage;

use Redirect;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$productImages 			= ProductImage::orderBy('created_at', 'DESC')
										->with('product')
										->paginate($this->limit);
		return view('dashboard.product_image.index',[
			'productImages' 		=> $productImages
		]);
	}
}