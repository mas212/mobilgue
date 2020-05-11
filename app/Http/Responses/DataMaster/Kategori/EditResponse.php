<?php
namespace App\Http\Responses\DataMaster\Kategori;

use Redirect;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable{
	public function toResponse($request, $id){
		$kategori       = Kategori::findById($id);
        return view('dashboard.kategori.edit', [
            'kategori'  => $kategori
        ]);
	}
}