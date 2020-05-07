<?php
namespace App\Http\Responses\Promo;

use Image;
use Redirect;
use App\Models\ProductPromo;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{

	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$product_promo 						= ProductPromo::findOrFail($this->id);
		$product_promo->nama 				= $request->nama;
		$product_promo->harga 				= $request->harga;
		$product_promo->ringkasan 			= $request->ringkasan;
		$product_promo->deskripsi 			= $request->deskripsi;
		$product_promo->promo_persentase 	= $request->promo_persentase;
		//setup photo
        $file                       		= $request->file('photo');
        $fileName                   		= $file->getClientOriginalName();
        $path 								= public_path('promo/' . $fileName);
        Image::make($file->getRealPath())->resize(480, 280)->save($path);
        $product_promo->photo      			= $fileName;
        $product_promo->save();
        return redirect()->route('product-promo.index')->withSuccess('Data Berhasil Diupdate');
	}
}