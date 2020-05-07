<?php
namespace App\Http\Responses\Benner;

use App\Models\Benner;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{
    private $id;

    function __construct($id){
    	$this->id 		= $id;
    }

	public function toResponse($request){
		$benner 			= Benner::findOrFail($this->id);
		return view('dashboard.benner.edit',[
			'benner' 		=> $benner
		]);
	}
}