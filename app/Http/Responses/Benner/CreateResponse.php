<?php
namespace App\Http\Responses\Benner;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{

	public function toResponse($request){
		return view('dashboard.benner.create');
	}
}