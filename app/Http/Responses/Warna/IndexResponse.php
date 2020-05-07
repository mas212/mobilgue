<?php
namespace App\Http\Responses\Warna;

use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$warnas 			= Warna::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.warna.index',[
			'warnas' 		=> $warnas
		]);
	}
}