<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
	function index(){
		$breadcrumb=array('title'=>'List Products','home'=>'home','type'=>'form','action'=>'products');
		$label['data']='product';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
	function add(){
		$breadcrumb=array('title'=>'Add Form','home'=>'home','type'=>'form','action'=>'add product');
		$label['data']='addpro';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
}
