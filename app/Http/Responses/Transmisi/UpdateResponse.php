<?php
namespace App\Http\Responses\Transmisi;

use Redirect;
use App\Models\Transmisi;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{
    
    private $id;

    function __construct($id){
    	$this->id 			= $id;
    }

    public function toResponse($request){
    	$transmisi 				= Transmisi::findOrFail($this->id);
    	$transmisi->nama	    = $request->nama;
    	$transmisi->save();
    	return redirect()->route('transmisi.index')->withSuccess('Data Berhasil Diupdate');
    }
} 