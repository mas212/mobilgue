<?php

namespace App\Http\Controllers\Dashboard;

use Image;
use Redirect;
use App\Models\Benner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Benner\IndexResponse;
use App\Http\Responses\Benner\CreateResponse;
use App\Http\Responses\Benner\StoreResponse;
use App\Http\Responses\Benner\EditResponse;
use App\Http\Responses\Benner\UpdateResponse;
use App\Http\Requests\BennerRequest;

class BennerController extends Controller
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

    public function store(BennerRequest $request)
    {
        $benner                 = new Benner;
        return new StoreResponse($request, $benner);
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
