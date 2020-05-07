<?php
namespace App\Http\Responses\Benner;

use App\Models\Benner;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$benners 			= Benner::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.benner.index',[
			'benners' 		=> $benners
		]);
	}
}