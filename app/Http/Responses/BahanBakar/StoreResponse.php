<?php
namespace App\Http\Responses\BahanBakar;

use Redirect;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
	private $request;
	private $bahan_bakar;

	function __construct($request, $bahan_bakar){
		$this->request 			= $request;
		$this->bahan_bakar 		= $bahan_bakar;
	}

	public function toResponse($request){
		$this->store();
		return redirect()->route('bahan-bakar.index')->withSuccess('Data Berhasil Disimpan');
	}

	public function store(){
		$this->bahan_bakar->nama 			= $this->request->nama;
		return $this->bahan_bakar->save();
	}

}