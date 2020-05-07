<?php 
namespace App\Http\Responses\Benner;

use Redirect;
use App\Models\Benner;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{

	private $id;

	function __construct($id){
		$this->id 			= $id;
	}

	public function toResponse($request){
		$benner 			= Benner::findOrFail($this->id);
		$benner->delete();
		return redirect()->route('promo-benner.index')->withSuccess('Data Berhasil Terhapus');
	}
}