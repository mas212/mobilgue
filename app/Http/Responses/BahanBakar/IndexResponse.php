<?php
namespace App\Http\Responses\BahanBakar;

use App\Models\BahanBakar;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$bahan_bakars 			= BahanBakar::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.bahan_bakar.index',[
			'bahan_bakars' 		=> $bahan_bakars
		]);
	}
}