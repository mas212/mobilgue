<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use App\Kategori;
use App\Subkategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Subkategori\IndexResponse;
use App\Http\Responses\Subkategori\CreateOrUpdateResponse;
use App\Http\Responses\Subkategori\DeleteResponse;

class SubKategoriController extends Controller
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
        $kategoris          = Kategori::all();
        return view('dashboard.subkategori.create',[
            'kategoris'     => $kategoris
        ]);
    }

    public function store(Request $request)
    {
        $subkategori            = new Subkategori;
        return new CreateOrUpdateResponse($request, $subkategori);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $kategoris          = Kategori::all();
        $subkategori            = Subkategori::findOrFail($id);
        return view('dashboard.subkategori.edit', [
            'kategoris'         => $kategoris,
            'subkategori'       => $subkategori
        ]);
    }

    public function update(Request $request, $id)
    {
        $subkategori            = Subkategori::findOrFail($id);
        return new CreateOrUpdateResponse($request, $subkategori);
    }

    public function destroy($id)
    {
        return new DeleteResponse($id);
    }
}
