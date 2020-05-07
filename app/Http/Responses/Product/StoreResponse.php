<?php 
namespace App\Http\Responses\Product;

use Redirect;
use Validator;
use Image;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
	public function toResponse($request){
		
		$validate = Validator::make($request->all(), [
            'nama'  => 'required|max:20'
        ]);

        if(!$validate->fails()) {

        	$product 					= new Product;
			$product->nama 				= $request->nama;
			$product->harga 			= $request->harga;
			$product->ringkasan 		= $request->ringkasan;
			//setup photo

			if ($request->hasFile('photo')) {
	            $foto = $request->file('photo');

	            if (is_array($foto) || is_object($foto)) {
	                // Mengambil file yang diupload
	                $uploaded_foto = $foto;
	                // mengambil extension file
	                $extension = $uploaded_foto->getClientOriginalExtension();
	                // membuat nama file random berikut extension
	                $filename     =  str_slug($product->nama). '.' . $extension;
	                $image_resize = Image::make($foto->getRealPath());
	                $image_resize->fit(400, 400);
	                $image_resize->save(public_path('products/' . $filename));
	                $product->photo = $filename;
	            }

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
			return redirect()->route('product-image.create', $product->id);

        }else{
        	$errors = $validate->messages();
        	return redirect()->route('product.create')
                			->withErrors($validate)
                			->withInput($request->input());
        }
	}
}