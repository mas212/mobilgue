<?php 
namespace App\Http\Responses\Benner;

use Image;
use Redirect;
use App\Models\Benner;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{

	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$benner 								= Benner::findOrFail($this->id);
		$benner->benner_nama 					= $request->benner_nama;
		$benner->benner_description 			= $request->benner_description;
		//setup photo
        $file                       			= $request->file('benner_photo');
        $fileName                   			= $file->getClientOriginalName();
        $path 									= public_path('benner/' . $fileName);
        Image::make($file->getRealPath())->resize(800, 400)->save($path);
        $benner->benner_photo           		= $fileName;
        $benner->save();
		return redirect()->route('promo-benner.index')->withSuccess('Data Berhasil Terupdate');
	}
}