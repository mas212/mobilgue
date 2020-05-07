<?php
namespace App\Http\Responses\Transmisi;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
    
	public function toResponse($request){
		return view('dashboard.transmisi.create');
	}
}