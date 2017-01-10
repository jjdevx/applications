<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    function index(){
		$breadcrumb=array('title'=>'List Categories','home'=>'home','type'=>'form','action'=>'categories');
		$label['data']='category';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
}
