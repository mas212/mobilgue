<?php
namespace App\Http\Responses\Warna;

use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{
    
    private $id;

    function __construct($id){
    	$this->id 			= $id;
    }

    public function toResponse($request){
    	$warna 				= Warna::findOrFail($this->id);
    	$warna->warna_mobil	= $request->warna_mobil;
    	$warna->save();
    	return redirect()->route('warna.index')->withSuccess('Data Berhasil Diupdate');
    }
} 