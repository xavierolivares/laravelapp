@extends('master')
@section('title', 'About')

@section('style')
<!-- About Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<h1 class="title m-b-md">About</h1>
<div class="links">
    <a href="https://laravel.com/docs">Docs</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://blog.laravel.com">Blog</a>
    <a href="https://nova.laravel.com">Nova</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://vapor.laravel.com">Vapor</a>
    <a href="https://github.com/laravel/laravel">GitHub</a>
</div>
@endsection
