<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Models\BahanBakar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\BahanBakar\IndexResponse;
use App\Http\Responses\BahanBakar\CreateResponse;
use App\Http\Responses\BahanBakar\StoreResponse;
use App\Http\Responses\BahanBakar\EditResponse;
use App\Http\Responses\BahanBakar\UpdateResponse;
use App\Http\Responses\BahanBakar\DeleteResponse;

class BahanBakarController extends Controller
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
        $bahan_bakar            = new BahanBakar;
        return new StoreResponse($request, $bahan_bakar);
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
