<?php
namespace App\Http\Responses\Subkategori;

use App\Kategori;
use App\Subkategori;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
	public $limit = 10;

	public function toResponse($request){
		$subkategoris 		= Subkategori::orderBy('created_at', 'DESC')
										->with('kategori')
										->paginate($this->limit);
		//dd($subkategoris);
		return view('dashboard.subkategori.index', [
			'subkategoris' 	=> $subkategoris
		]);
	}
}