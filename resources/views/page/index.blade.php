@extends('layouts.master')

@section('title')
页面管理
@stop

@section('page-title')
页面管理
@stop

@section('content')
<script src="{{asset('vue.min.js')}}"></script>
@include('page.partials.tab')
@include('page.partials.container')
<script src="{{asset('js/dragula.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('js/dragula.min.css')}}" />
<script>
    function ff (id) {
        return document.getElementById(id);
    }
    dragula([ff('left'), ff('right')],{
        copy: true,
    });

    
    dragula([ff('right')], {
        removeOnSpill: true,
    });
        
</script>
@stop