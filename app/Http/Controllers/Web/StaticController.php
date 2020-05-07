<?php

namespace App\Http\Controllers\Web;

use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function aboutUs(){
    	$kategoris 		= Kategori::all();
    	return view('web.static.about',[
    		'kategoris' 	=> $kategoris
    	]);
    }

    public function ruleBuyer(){
    	$kategoris 		= Kategori::all();
    	return view('web.static.rule_buyer',[
    		'kategoris' 	=> $kategoris
    	]);
    }

    public function term_condition(){
    	$kategoris 		= Kategori::all();
    	return view('web.static.term_condition',[
    		'kategoris' 	=> $kategoris
    	]);
    }

    public function contactUs(){
    	$kategoris 		= Kategori::all();
    	return view('web.static.contact',[
    		'kategoris' 	=> $kategoris
    	]);
    }
}
