@extends('master')
@section('title', 'About')

@section('style')
<style>
    html, body {
        background-image: url('https://images.shcdn.de/resized/w750/p/baumwolljersey-micro-streifenliebe-tuerkis--_11807-024_2.jpg');
        background-size: cover;
    }

    .title {
        font-size: 84px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }            
</style>
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
