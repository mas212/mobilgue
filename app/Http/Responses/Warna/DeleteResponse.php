<?php
namespace App\Http\Responses\Warna;

use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{
    
    private $id;

    function __construct($id){
    	$this->id 			= $id;
    }

    public function toResponse($request){
    	$warna 				= Warna::findOrFail($this->id);
        $warna->delete();
    	return redirect()->back();
    }
}