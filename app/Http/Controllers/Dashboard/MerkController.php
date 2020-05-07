<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use Validator;
use App\Merk;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class MerkController extends Controller
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
        $merks              = Merk::orderBy('created_at', 'DESC')->paginate($this->limit);
        return view('dashboard.merk.index',[
            'merks'         => $merks
        ]);
    }

    public function create()
    {
        return view('dashboard.merk.create');
    }

    public function store()
    {
        $validate = Validator::make($this->request->all(), [
            'nama'=>'required|min:4|max:255',
        ]);

        if (!$validate->fails()) {
             $merk              =  new Merk;
             $merk->nama        = $this->request->nama;
             $merk->save();
             return redirect()->route('merk.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('merk.create')
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
        $merk               = Merk::findOrFail($id);
        return view('dashboard.merk.edit',[
            'merk'          => $merk
        ]);
    }

    public function update($id)
    {
         $validate = Validator::make($this->request->all(), [
            'nama'=>'required|min:5|max:255',
        ]);

        if (!$validate->fails()) {
             $merk              = Merk::findOrFail($id);
             $merk->nama        = $this->request->nama;
             $merk->save();
             return redirect()->route('merk.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('merk.create')
                ->withErrors($validate)
                ->withInput($this->request->input());
        }
    }

    public function destroy($id)
    {
        $merk               = Merk::findOrFail($id);
        $merk->delete();
        return redirect()->back();
    }
}
