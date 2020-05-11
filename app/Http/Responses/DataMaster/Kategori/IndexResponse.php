<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
	protected $limit = 10;
	public function toResponse($request){
		$kategoris          = Kategori::sort()->paginate($this->limit);
        return view('dashboard.kategori.index',[
            'kategoris'     => $kategoris
        ]);
	}
}