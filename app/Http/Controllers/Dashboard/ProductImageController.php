<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\ProductImage\IndexResponse;
use App\Http\Responses\ProductImage\CreateResponse;
use App\Http\Responses\ProductImage\StoreResponse;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function index(){
    	return new IndexResponse;
    }

    public function create($id){
    	return new CreateResponse($id);
    }

    public function store(Request $request){
        $productImage           = new ProductImage;
        return new StoreResponse($request, $productImage);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function delete($id){

    }
}
