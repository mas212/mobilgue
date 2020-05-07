<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use Validator;
use App\TahunProduksi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class TahunProduksiController extends Controller
{
    protected $request;
    protected $response;
    protected $limit = 10;

    public function __construct(Request $request, Response $response){
        $this->request      = $request;
        $this->response     = $response;
        $this->middleware('superadmin');
    }

    public function index()
    {
        $tahun_produksi     = TahunProduksi::orderBy('created_at', 'DESC')->paginate($this->limit);
        return view('dashboard.tahun_produksi.index',[
            'tahun_produksi' => $tahun_produksi
        ]);
    }

    public function create()
    {
        return view('dashboard.tahun_produksi.create');
    }

    public function store()
    {
        $validate = Validator::make($this->request->all(), [
            'tahun_produksi'    =>'required|max:4',
        ]);

        if (!$validate->fails()) {
             $tahun_produksi                        =  new TahunProduksi;
             $tahun_produksi->tahun_produksi        = $this->request->tahun_produksi;
             $tahun_produksi->save();
             return redirect()->route('tahun-produksi.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('tahun-produksi.create')
                ->withErrors($validate)
                ->withInput($this->request->input());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tahun_produksi         = TahunProduksi::findOrFail($id);
        return view('dashboard.tahun_produksi.edit',[
            'tahun_produksi'    => $tahun_produksi
        ]);
    }

    public function update($id)
    {
        $validate = Validator::make($this->request->all(), [
            'tahun_produksi'    =>'required|max:4',
        ]);

        if (!$validate->fails()) {
             $tahun_produksi                        = TahunProduksi::findOrFail($id);
             $tahun_produksi->tahun_produksi        = $this->request->tahun_produksi;
             $tahun_produksi->save();
             return redirect()->route('tahun-produksi.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('tahun-produksi.create')
                ->withErrors($validate)
                ->withInput($this->request->input());
        }
    }

    public function destroy($id)
    {
        $tahun_produksi         = TahunProduksi::findOrFail($id);
        $tahun_produksi->delete();
        return redirect()->back();
    }
}
