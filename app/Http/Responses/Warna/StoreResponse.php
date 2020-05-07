<?php
namespace App\Http\Responses\Warna;

use Redirect;
use App\Models\Warna;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
    
    private $request;
    private $warna;

    function __construct($request, $warna){
    	$this->request 			= $request;
    	$this->warna 			= $warna;
    }

    public function toResponse($request){
    	$this->store();
    	return redirect()->route('transmisi.index')->withSuccess('Data Berhasil Disimpan');
    }

    public function store(){
    	$this->warna->warna_mobil 			= $this->request->warna_mobil;
    	return $this->warna->save();
    }
}