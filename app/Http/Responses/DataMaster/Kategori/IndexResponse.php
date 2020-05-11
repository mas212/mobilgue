<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
	protected $limit = 10;
	public function toResponse($request){
		$kategoris          = Kategori::sort()->limit();
        return view('dashboard.kategori.index',[
            'kategoris'     => $kategoris
        ]);
	}

	public function limit($query){
		$limit = 10;
		return $query->paginate($limit);
	}
}