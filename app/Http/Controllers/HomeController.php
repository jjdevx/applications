<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
    	$breadcrumb=array('title'=>'Dashboards','home'=>'home','type'=>'graph','action'=>'products'); 
    	$label['data']='main';
        return view('home/index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
    }

    public function minor()
    {
        return view('home/minor');
    }
}
