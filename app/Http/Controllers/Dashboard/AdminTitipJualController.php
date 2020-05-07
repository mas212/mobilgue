<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Models\TitipJual;
use App\Models\DetailTitipJual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Admin_titipJual\IndexResponse;

class AdminTitipJualController extends Controller
{
	public function __construct()
    {
    	$this->middleware('superadmin');
    }
    
    public function getTitipJual(){
    	return new IndexResponse;
    }
}
