<?php 
namespace App\Http\Responses\Product;

use Redirect;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{

	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$product 					= Product::findOrFail($this->id);
		$product->nama 				= $request->nama;
		$product->harga 			= $request->harga;
		$product->ringkasan 		= $request->ringkasan;
		//setup photo
         if($request->file('photo') == ""){
            $product->photo                 = $product->photo;
        } else{
            $file                           = $request->file('photo');
            $fileName                       = $file->getClientOriginalName();
            $request->file('photo')->move("products/", $fileName);
            $product->photo                 = $fileName;
        }
		$product->deskripsi 		= $request->deskripsi;
		$product->kategori_id  		= $request->kategori_id;
		$product->subcat_id 		= $request->subcat_id;
		$product->tahun  			= $request->tahun;
		$product->merek  			= $request->merek;
		$product->jarak  			= $request->jarak;
		$product->warna  			= $request->warna;
		$product->transmisi_id  	= $request->transmisi_id;
		$product->status_jual 	= 'ada';
		$product->save();
		return redirect()->route('product.index')->withSuccess('Data Berhasil Terupdate');
	}
}