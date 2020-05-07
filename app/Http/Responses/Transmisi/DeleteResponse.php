<?php
namespace App\Http\Responses\Transmisi;

use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{
    
    private $id;

    function __construct($id){
    	$this->id 			= $id;
    }

    public function toResponse($request){
    	$transmisi 				= Transmisi::findOrFail($this->id);
        $transmisi->delete();
    	return redirect()->back();
    }
}