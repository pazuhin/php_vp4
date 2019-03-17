@extends('layouts.app')

@section('content')
    <div class="product-container">
        <div class="product-container__image-wrap"><img src="/uploads/{{$product->image_name}}" class="image-wrap__image-product"></div>
        <div class="product-container__content-text">
            <div class="product-container__content-text__title">{{$product->name}}</div>
            <div class="product-container__content-text__price">
                <div class="product-container__content-text__price__value">
                    Цена: <b>{{$product->price}}</b>
                    руб
                </div><a href="#" class="btn btn-blue">Купить</a>
            </div>
            <div class="product-container__content-text__description">
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
    </div>
@endsection