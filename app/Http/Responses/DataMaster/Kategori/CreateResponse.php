<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
	public function toResponse($request){
		return view('dashboard.kategori.create');
	}
}