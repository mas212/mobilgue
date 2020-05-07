<?php
namespace App\Http\Responses\ProductImage;

use Redirect;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
	private $id;

	function __construct($id){
		$this->id 				= $id;
	}
    public function toResponse($request){
    	$product 				= Product::findOrFail($this->id);
    	return view('dashboard.product_image.create',[
    		'product' 			=>  $product
    	]);
    }
}