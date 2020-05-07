<?php
namespace App\Http\Responses\Transmisi;

use Redirect;
use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
    
    private $request;
    private $transmisi;

    function __construct($request, $transmisi){
    	$this->request 			= $request;
    	$this->transmisi 		= $transmisi;
    }

    public function toResponse($request){
    	$this->store();
    	return redirect()->route('transmisi.index')->withSuccess('Data Berhasil Disimpan');
    }

    public function store(){
    	$this->transmisi->nama 			= $this->request->nama;
    	return $this->transmisi->save();
    }
}