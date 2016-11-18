<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;
class ProductController extends Controller
{
	public function __construct()
	{
			$this->middleware('auth');
	}
	function getchild(Request $Request){
		$datas=DB::table('categories')->whereIn('pid',$Request->get('pid'))->get();
		// $datas['childs']=Category::all()->whereIn('pid',explode(',',$Request->get('pid')));
		echo json_encode($datas);
	}
	function index(){
		$breadcrumb=array('title'=>'List Products','home'=>'home','type'=>'form','action'=>'products');
		$label['data']='product';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
	}
	function add(){
		$datas['parrents']=Category::all()->where('pid', '=', 0);
		$breadcrumb=array('title'=>'Add Form','home'=>'home','type'=>'form','action'=>'add product');
		$label['data']='addpro';
		return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb,'datas'=>$datas));
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
