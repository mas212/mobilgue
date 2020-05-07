<?php
namespace App\Http\Responses\Transmisi;

use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$transmisis 			= Transmisi::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.transmisi.index',[
			'transmisis' 		=> $transmisis
		]);
	}
}