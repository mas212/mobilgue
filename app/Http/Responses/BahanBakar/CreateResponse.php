<?php
namespace App\Http\Responses\BahanBakar;

use App\Models\BahanBakar;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
	public function toResponse($request){
		return view('dashboard.bahan_bakar.create');
	}
}