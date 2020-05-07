<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Transmisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Transmisi\IndexResponse;
use App\Http\Responses\Transmisi\CreateResponse;
use App\Http\Responses\Transmisi\StoreResponse;
use App\Http\Responses\Transmisi\EditResponse;
use App\Http\Responses\Transmisi\UpdateResponse;
use App\Http\Responses\Transmisi\DeleteResponse;

class TransmisiController extends Controller
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
        $transmisi              = new Transmisi;
        return new StoreResponse($request, $transmisi);
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
