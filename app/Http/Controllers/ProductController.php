<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
	function index(){
		$label['data']='product';
		return view('home.index',array('label'=>$label));
	}
}
