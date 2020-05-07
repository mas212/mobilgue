<?php

namespace App\Http\Controllers\Member;

use Auth;
use Redirect;
use App\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$user_id 		= Auth::user()->id;
		$user 			= User::where('id', '=',$user_id)->first();
        return view('member.profile.index',[
        	'user' 		=> $user
        ]);
	}

    public function edit(){
    	$user_id 		= Auth::user()->id;
        $user 			= User::findOrFail($user_id);
        return view('member.profile.edit', [
        	'user' 		=> $user 
        ]);
    }

    public function update(Request $request){
    	$user_id 				= Auth::user()->id;
		$user 					= User::findOrFail($user_id);
		$user->name 			= $request->name;
		$user->email 			= $request->email;
		$userProfile 			= $user->userProfile;
		$userProfile->user_id 	= $user_id;
		$userProfile->phone 	= $request->phone;
		$userProfile->address 	= $request->address;
		$userProfile->wa 		= $request->wa;
		$userProfile->photo 	= $request->photo;
		$user->save();
		$user->userProfile()->save($userProfile);
		return redirect()->route('promo-list.index');
    }
}
