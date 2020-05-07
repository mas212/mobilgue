<?php
namespace App\Http\Responses\Warna;

use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable{
    
	public function toResponse($request){
		return view('dashboard.warna.create');
	}
}