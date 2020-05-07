<?php
namespace App\Http\Responses\Subkategori;

use App\Subkategori;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{
	private $id;

	function __construct($id){
		$this->id 		= $id;
	}

	public function toResponse($request){
		$subkategori 		= Subkategori::findOrFail($this->id);
		$subkategori->delete();
		return redirect()->route('subkategori.index')->withSuccess('Data sukses dihapus');
	}
}