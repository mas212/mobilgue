<?php

namespace App\Http\Controllers\Dashboard;

use Image;
use Redirect;
use App\Models\ProductPromo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Promo\IndexResponse;
use App\Http\Responses\Promo\CreateResponse;
use App\Http\Responses\Promo\StoreResponse;
use App\Http\Responses\Promo\EditResponse;
use App\Http\Responses\Promo\UpdateResponse;
use App\Http\Responses\Promo\DeleteResponse;

class ProductPromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function index()
    {
        return new IndexResponse;
    }

    public function create()
    {
        return new CreateResponse;
    }

    public function store(Request $request)
    {
        $product_promo              = new ProductPromo;
        return new StoreResponse($request, $product_promo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return new EditResponse($id);
    }

    public function update(Request $request, $id)
    {
        return new UpdateResponse($id);
    }

    public function destroy($id)
    {
        return new DeleteResponse($id); 
    }
}
