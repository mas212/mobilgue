<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Redirect;
use App\Kategori;
use Illuminate\Http\Request;

use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
	public function toResponse($request){
		$kategori       = Kategori::create($request->all());
        return redirect()->route('kategori.index');
	}
}