<?php
namespace App\Http\Responses\Promo;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
	public function toResponse($request){
		return view('dashboard.promo.create');
	}
}