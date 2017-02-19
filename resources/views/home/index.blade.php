@extends('layouts.app-admin',array('label'=>$label['data']))

@section('title', 'Main page')

@section('content')
  @if(isset($label)&& $label['data']=='product')
        {!!View("layouts.products.index2")->with('breadcrumb',$breadcrumb)->with('datas',$datas)!!}
  @elseif(isset($label)&& $label['data']=='addpro')
        {!!View("layouts.products.add")->with('breadcrumb',$breadcrumb)->with('datas',$datas)!!}
  @elseif(isset($label)&& $label['data']=='detailpro')
       {!!View("layouts.products.detail")->with('breadcrumb',$breadcrumb)!!}
  @elseif(isset($label)&& $label['data']=='editpro')
       {!!View("layouts.products.edit")->with('breadcrumb',$breadcrumb)->with('datas',$datas)!!}
  @elseif(isset($label)&& $label['data']=='category')
   {!!View("layouts.category.index")->with('breadcrumb',$breadcrumb)!!}
  @else
      {!!View("layouts.main")->with('breadcrumb',$breadcrumb)!!}
  @endif
@endsection
