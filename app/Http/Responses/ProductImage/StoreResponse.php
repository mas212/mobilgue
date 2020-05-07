<?php
namespace App\Http\Responses\ProductImage;

use Image;
use Redirect;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
	private $request;
    private $productImage;

	function __construct($request, $productImage){
        $this->request              = $request;
		$this->productImage 		= $productImage;
	}
    public function toResponse($request){
    	$this->store();
        return redirect()->route('product.index')->withSuccess('Data berhasil Disimpan');
    }

    public function store(){
        $this->productImage->product_id = $this->request->product_id;
        $file                           = $this->request->file('photo_1');
        $fileName                       = $file->getClientOriginalName();
        $path                           = public_path('products/' . $fileName);
        Image::make($file->getRealPath())->resize(400, 400)->save($path);
        $this->productImage->photo_1   = $fileName;
        //photo 2
        $file                           = $this->request->file('photo_2');
        $fileName                       = $file->getClientOriginalName();
        $path                           = public_path('products/' . $fileName);
        Image::make($file->getRealPath())->resize(400, 400)->save($path);
        $this->productImage->photo_2      = $fileName;
        //photo 3
        $file                           = $this->request->file('photo_3');
        $fileName                       = $file->getClientOriginalName();
        $path                           = public_path('products/' . $fileName);
        Image::make($file->getRealPath())->resize(400, 400)->save($path);
        $this->productImage->photo_3      = $fileName;
        return $this->productImage->save();
    }
}