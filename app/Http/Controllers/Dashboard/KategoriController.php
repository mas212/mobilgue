<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\KategoriRequest;
use App\Http\Controllers\Controller;
use App\Http\Responses\DataMaster\Kategori\IndexResponse;
use App\Http\Responses\DataMaster\Kategori\CreateResponse;
use App\Http\Responses\DataMaster\Kategori\StoreResponse;
use App\Http\Responses\DataMaster\Kategori\EditResponse;
use App\Http\Responses\DataMaster\Kategori\UpdateResponse;
use App\Http\Responses\DataMaster\Kategori\DeleteResponse;

class KategoriController extends Controller
{
    public function index()
    {
        return new IndexResponse;
    }

    public function create()
    {
        return new CreateResponse;
    }

    public function store(KategoriRequest $request)
    {
        return new StoreResponse;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return new EditResponse($id);
    }

    public function update(KategoriRequest $request, $id)
    {
        return new UpdateResponse($id);   
    }

    public function destroy($id)
    {
        return new DeleteResponse($id);
    }
}
