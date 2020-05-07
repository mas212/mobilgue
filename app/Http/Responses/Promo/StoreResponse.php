<?php
namespace App\Http\Responses\Promo;

use Image;
use Redirect;
use App\Models\ProductPromo;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
    
    private $request;
    private $product_promo;

    function __construct($request, $product_promo){
    	$this->request 			= $request;
    	$this->product_promo 	= $product_promo;
    }

	public function toResponse($request){
		$this->store();
		return redirect()->route('product-promo.index')->withSuccess('Data Berhasil Tersimpan');
	}

	public function store(){
		$this->product_promo->nama 				= $this->request->nama;
		$this->product_promo->harga 			= $this->request->harga;
		$this->product_promo->ringkasan 		= $this->request->ringkasan;
		$this->product_promo->deskripsi 		= $this->request->deskripsi;
		$this->product_promo->promo_persentase 	= $this->request->promo_persentase;
		//setup photo
        $file                       			= $this->request->file('photo');
        $fileName                   			= $file->getClientOriginalName();
        $path 									= public_path('promo/' . $fileName);
        Image::make($file->getRealPath())->resize(480, 280)->save($path);
        $this->product_promo->photo      		= $fileName;
        return $this->product_promo->save();
	}
}