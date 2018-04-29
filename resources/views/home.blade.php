@extends('layouts.app')

@section('navbar')
<nav-component></nav-component>
@endsection

@section('header')
    <header-component :auth="{{ (Auth::check())?Auth::user():0 }}" :token="'{{ csrf_token() }}'"></header-component>
@endsection

@section('content')
    <main class="el-main">    
        <h1>Hello</h1>    
    </main>
@endsection
