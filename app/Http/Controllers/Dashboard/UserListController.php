<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use Redirect;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserListController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }
    
    public function getUser(){
    	$users 			= User::paginate(10);
    	return view('dashboard.user.index',[
    		'users' 	=> $users
    	]);
    }

    public function updateStatusAkses(Request $request, $id){
    	$statusAkses 				= User::findOrFail($id);
    	$statusAkses->superadmin 	= $request->superadmin;
    	$statusAkses->update();
    	return redirect()->back();
    }
}
