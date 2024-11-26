<?php



public function index($name='Everybody')
{
    $data=['name'=>$name];
    return view('hello.index',$data);
}

@extends('layouts.master')

@section('title','Hello')

@section('content')
<h1>This is {{$name}}'s home.</h1>
@endsection

