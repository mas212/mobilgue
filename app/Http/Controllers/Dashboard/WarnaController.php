<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Models\Warna;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Warna\IndexResponse;
use App\Http\Responses\Warna\CreateResponse;
use App\Http\Responses\Warna\StoreResponse;
use App\Http\Responses\Warna\EditResponse;
use App\Http\Responses\Warna\UpdateResponse;
use App\Http\Responses\Warna\DeleteResponse;

class WarnaController extends Controller
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
        $warna              = new Warna;
        return new StoreResponse($request, $warna);
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
