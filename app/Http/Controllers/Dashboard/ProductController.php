<?php 
namespace App\Http\Controllers\Dashboard;

use Image;
use Redirect;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Product\IndexResponse;
use App\Http\Responses\Product\CreateResponse;
use App\Http\Responses\Product\StoreResponse;
use App\Http\Responses\Product\EditResponse;
use App\Http\Responses\Product\UpdateResponse;
use App\Http\Responses\Product\DeleteResponse;

class ProductController extends Controller
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
        $product       = new Product;
        return new StoreResponse($request, $product);
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
