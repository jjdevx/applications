@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    @if(isset($label)&& $label['data']=='product') 
        {!!View("layouts.products.index")!!}
    @else 
        @include('layouts.main')
    @endif 
@endsection
