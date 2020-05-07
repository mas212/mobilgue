<?php
namespace App\Http\Responses\Admin_titipJual;

use Redirect;
use App\Models\TitipJual;
use App\Models\DetailTitipJual;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
    
    public $limit 		= 10;

	public function toResponse($request){
		$titip_juals 			= DetailTitipJual::orderBy('created_at', 'DESC')
										->paginate($this->limit);
		return view('dashboard.titip_jual.index',[
			'titip_juals' 		=> $titip_juals
		]);
	}
}