<?php
namespace App\Http\Responses\Subkategori;

use Illuminate\Contracts\Support\Responsable;

class CreateOrUpdateResponse implements Responsable{
	private $request;
	private $subkategori;

	function __construct($request, $subkategori){
		$this->request 		= $request;
		$this->subkategori 	= $subkategori;
	}

	public function toResponse($request){
		$this->createOrUpdate();
		return redirect()->route('subkategori.index')->withSuccess('Data tersimpan');
	}

	public function createOrUpdate(){
		$this->subkategori->nama 			= $this->request->nama;
		$this->subkategori->kategori_id 	= $this->request->kategori_id;
		return $this->subkategori->save();
	}
}