@extends('master')

@section('title', 'Home')

@section('style')
<style>
    html, body {
        background-image: url('https://img5.goodfon.com/wallpaper/nbig/1/45/citrus-oranges-fruits.jpg');
        background-size: cover;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #FFFFFF;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }            

</style>
@endsection

@section('content')
<h1 class="title m-b-md">Home</h1>
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