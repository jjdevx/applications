<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    { 
    	$label['data']='main';
        return view('home/index',array('label'=>$label));
    }

    public function minor()
    {
        return view('home/minor');
    }
}
