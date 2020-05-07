<?php 
namespace App\Http\Responses\Product;

use Redirect;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{

	private $id;

	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$product 			= Product::findOrFail($this->id);
		$product->delete();
		return redirect()->route('product.index')->withSuccess('Data Berhasil Terhapus');
	}
}