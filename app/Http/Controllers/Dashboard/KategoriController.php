<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use Validator;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\KategoriRequest;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    protected $limit = 10;
    public function index()
    {
        $kategoris          = Kategori::orderBy('created_at', 'DESC')->paginate($this->limit);
        return view('dashboard.kategori.index',[
            'kategoris'     => $kategoris
        ]);
    }

    public function create()
    {
        return view('dashboard.kategori.create');
    }

    public function store(KategoriRequest $request)
    {
        
        $kategori       = Kategori::create($request->all());
        return redirect()->route('kategori.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori       = Kategori::findOrFail($id);
        return view('dashboard.kategori.edit', [
            'kategori'  => $kategori
        ]);
    }

    public function update(KategoriRequest $request, $id)
    {
        $kategori       = Kategori::findOrFail($id);
        $kategori->update($request->all());
        return redirect()->route('kategori.index');   
    }

    public function destroy($id)
    {
        $kategori       = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back();
    }
}
