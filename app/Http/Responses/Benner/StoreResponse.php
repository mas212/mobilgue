<?php
namespace App\Http\Responses\Benner;
use Image;
use Redirect;
use App\Models\Benner;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
    
    private $request;
    private $benner;

    function __construct($request, $benner){
    	$this->request 				= $request;
    	$this->benner 				= $benner;
    }

	public function toResponse($request){
		$this->store();
		return redirect()->route('promo-benner.index')->withSuccess('Data Berhasil Disimpan');
	}

	public function store(){
		$this->benner->benner_nama 				= $this->request->benner_nama;
		$this->benner->benner_description 		= $this->request->benner_description;
		//setup photo
        $file                       			= $this->request->file('benner_photo');
        $fileName                   			= $file->getClientOriginalName();
        $path 									= public_path('benner/' . $fileName);
        Image::make($file->getRealPath())->resize(800, 400)->save($path);
        $this->benner->benner_photo           	= $fileName;
        return $this->benner->save();
	}
}