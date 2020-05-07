<?php
namespace App\Http\Responses\Warna;

use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{
    
    private $id;

    function __construct($id){
    	$this->id 			= $id;
    }

    public function toResponse($request){
    	$warna 				= Warna::findOrFail($this->id);
    	return view('dashboard.warna.edit',[
    		'warna' 		=> $warna
    	]);
    }
}