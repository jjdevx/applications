<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'infos');
        $label['data']='admin';
        return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
    }
}
