<?php

namespace App\Http\Controllers\Dashboard;

use Redirect;
use Validator;
use App\JarakTempuh;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class JarakTempuhController extends Controller
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
        $jarak_tempuhs      = JarakTempuh::orderBy('created_at', 'DESC')->paginate($this->limit);
        return view('dashboard.jarak_tempuh.index',[
            'jarak_tempuhs'     => $jarak_tempuhs
        ]);
    }

    public function create()
    {
        return view('dashboard.jarak_tempuh.create');
    }

    public function store()
    {
        $validate = Validator::make($this->request->all(), [
            'jarak_tempuh'    =>'required|min:2',
        ]);

        if (!$validate->fails()) {
             $jarak_tempuh                        =  new JarakTempuh;
             $jarak_tempuh->jarak_tempuh          = $this->request->jarak_tempuh;
             $jarak_tempuh->save();
             return redirect()->route('jarak-tempuh.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('jarak-tempuh.create')
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
        $jarak_tempuh           = JarakTempuh::findOrFail($id);
        return view('dashboard.jarak_tempuh.edit',[
            'jarak_tempuh'      => $jarak_tempuh
        ]);
    }

    public function update($id)
    {
        $validate = Validator::make($this->request->all(), [
            'jarak_tempuh'    =>'required|min:2',
        ]);

        if (!$validate->fails()) {
             $jarak_tempuh                        = JarakTempuh::findOrFail($id);
             $jarak_tempuh->jarak_tempuh          = $this->request->jarak_tempuh;
             $jarak_tempuh->save();
             return redirect()->route('jarak-tempuh.index');
        }else{
            $errors = $validate->messages();

            return redirect()->route('jarak-tempuh.create')
                ->withErrors($validate)
                ->withInput($this->request->input());
        }
    }

    public function destroy($id)
    {
        $jarak_tempuh           = JarakTempuh::findOrFail($id);
        $jarak_tempuh->delete();
        return redirect()->back();
    }
}
