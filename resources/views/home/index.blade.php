@extends('layouts.app-admin',array('label'=>$label['data']))

@section('title', 'Main page')

@section('content')
    @if(isset($label)&& $label['data']=='product')
        {!!View("layouts.products.index")->with('breadcrumb',$breadcrumb)!!}
   @elseif(isset($label)&& $label['data']=='addpro')
        {!!View("layouts.products.add")->with('breadcrumb',$breadcrumb)!!}
    @else
        {!!View("layouts.main")->with('breadcrumb',$breadcrumb)!!}
    @endif
@endsection
