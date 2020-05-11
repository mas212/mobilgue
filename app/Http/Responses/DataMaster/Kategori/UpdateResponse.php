<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Redirect;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{
	public function toResponse($request, $id){
		$kategori       = Kategori::findById($id);
        $kategori->update($request->all());
        return redirect()->route('kategori.index');
	}
}