<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customuser;
class CustomUserController extends Controller
{

    public function index(){
        $datas['users']=Customuser::all(); 
        $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'user');
        $label['data']='user';
        return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb,'datas'=>$datas));
    }
    public function create(){ 
        $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'user');
        $label['data']='useradd';
        return view('home.index',array('user'=> new Customuser(old()),'label'=>$label,'breadcrumb'=>$breadcrumb));
    }
    public function edit(Customuser $user,Request $r){ 
        $datas['users']=$user;
        $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'user');
        $label['data']='edituser';
        return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb,'datas'=>$datas));
    }
    public function save(Request $r){
        $rols= new Role($r->all());
        $rols->validate($r->all());
        $rols->save();
        return redirect()->route('role.list');
    }
    public function info(Customuser $user,Request $r){    
        $datas['users']=$user; 
        $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'user');
        $label['data']='userinfo';
        return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb,'datas'=>$datas));
    } 
    public function destroy(Customuser $user){ 
        $user->delete();
        return redirect()->to('/users')->withMessage('user delete success!');
    }
}
