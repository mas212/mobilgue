<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Redirect;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Responsable;

class DeleteResponse implements Responsable{
	public function toResponse($request, $id){
		$kategori       = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back();
	}
}