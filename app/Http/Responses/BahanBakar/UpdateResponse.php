<?php
namespace App\Http\Responses\BahanBakar;

use Redirect;
use App\Models\BahanBakar;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{
	private $id;
	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$bahan_bakar 			= BahanBakar::findOrFail($this->id);
		$bahan_bakar->nama 		= $request->nama;
		$bahan_bakar->save();
		return redirect()->route('bahan-bakar.index')->withSuccess('Data Berhasil Diupdate');
	}
}