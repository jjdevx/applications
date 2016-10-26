<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
	public function __construct()
	{
			$this->middleware('auth');
	}
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
	function detail(){
		$breadcrumb=array('title'=>'Product detail dashboard','home'=>'home','type'=>'form','action'=>'product detail');
		$label['data']='detailpro';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
	function edit(){
		$breadcrumb=array('title'=>'Product update dashboard','home'=>'home','type'=>'form','action'=>'product update');
		$label['data']='editpro';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
}
