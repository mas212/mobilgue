<?php
namespace App\Http\Responses\BahanBakar;

use App\Models\BahanBakar;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{
	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$bahan_bakar 			= BahanBakar::findOrFail($this->id);
		return view('dashboard.bahan_bakar.edit',[
			'bahan_bakar' 		=> $bahan_bakar
		]);
	}
}