@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="products-columns">
                @foreach($products as $product)
                    <div class="products-columns__item">
                        <div class="products-columns__item__title-product">
                            <a href="{{ route('product_single', ['id' => $product->id]) }}" class="products-columns__item__title-product__link">{{$product->name}}</a>
                        </div>
                        <div class="products-columns__item__thumbnail">
                            <a href="{{ route('product_single', ['id' => $product->id]) }}" class="products-columns__item__thumbnail__link">
                                <img src="uploads/{{$product->image_name}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a>
                        </div>
                        <div class="products-columns__item__description"><span class="products-price">{{$product->price}}</span>
                            <a href="#" class="btn btn-blue">Купить</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
        @endsection




{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>Home</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--<!-- Styles -->--}}
{{--<style>--}}
{{--html, body {--}}
{{--background-color: #fff;--}}
{{--color: #636b6f;--}}
{{--font-family: 'Nunito', sans-serif;--}}
{{--font-weight: 200;--}}
{{--height: 100vh;--}}
{{--margin: 0;--}}
{{--}--}}

{{--.full-height {--}}
{{--height: 100vh;--}}
{{--}--}}

{{--.flex-center {--}}
{{--align-items: center;--}}
{{--display: flex;--}}
{{--justify-content: center;--}}
{{--}--}}

{{--.position-ref {--}}
{{--position: relative;--}}
{{--}--}}

{{--.top-right {--}}
{{--position: absolute;--}}
{{--right: 10px;--}}
{{--top: 18px;--}}
{{--}--}}

{{--.content {--}}
{{--text-align: center;--}}
{{--}--}}

{{--.title {--}}
{{--font-size: 84px;--}}
{{--}--}}

{{--.links > a {--}}
{{--color: #636b6f;--}}
{{--padding: 0 25px;--}}
{{--font-size: 13px;--}}
{{--font-weight: 600;--}}
{{--letter-spacing: .1rem;--}}
{{--text-decoration: none;--}}
{{--text-transform: uppercase;--}}
{{--}--}}

{{--.m-b-md {--}}
{{--margin-bottom: 30px;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@auth--}}
{{--<a href="{{ url('/home') }}">Home</a>--}}
{{--@else--}}
{{--<a href="{{ route('login') }}">Login</a>--}}

{{--@if (Route::has('register'))--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--@endif--}}
{{--@endauth--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="content">--}}
{{--<div class="title m-b-md">--}}
{{--Laravel--}}
{{--</div>--}}

{{--<div class="links">--}}
{{--<a href="https://laravel.com/docs">Docs</a>--}}
{{--<a href="https://laracasts.com">Laracasts</a>--}}
{{--<a href="https://laravel-news.com">News</a>--}}
{{--<a href="https://blog.laravel.com">Blog</a>--}}
{{--<a href="https://nova.laravel.com">Nova</a>--}}
{{--<a href="https://forge.laravel.com">Forge</a>--}}
{{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
