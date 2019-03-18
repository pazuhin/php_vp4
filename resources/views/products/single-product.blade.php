<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Games Market') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modal.js') }}" defer></script>


<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs.min.css')}}">
</head>
<body>
<div id="app">
    <main class="py-4" style="padding-top: 0 !important">

        <div class="main-wrapper">
            <header class="main-header">
                @if(Auth::user())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            {{ Auth::user()->name }} <span class="caret"></span>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
                <div class="logotype-container"><a href="#" class="logotype-link"><img src="{{asset('img/logo.png')}}"
                                                                                       alt="Логотип"></a>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <li class="nav-list__item"><a href="{{route('home')}}" class="nav-list__item__link">Главная</a>
                        </li>
                        <li class="nav-list__item"><a href="#" class="nav-list__item__link">Мои заказы</a></li>
                        <li class="nav-list__item"><a href="#" class="nav-list__item__link">Новости</a></li>
                        <li class="nav-list__item"><a href="#" class="nav-list__item__link">О компании</a></li>
                    </ul>
                </nav>
                <div class="header-contact">
                    <div class="header-contact__phone"><a href="#" class="header-contact__phone-link" id="one">Телефон:
                            33-333-33</a>
                    </div>
                </div>
                <div class="header-container">
                    <div class="payment-container">
                        <div class="payment-basket__status">
                            <div class="payment-basket__status__icon-block"><a
                                        class="payment-basket__status__icon-block__link"><i
                                            class="fa fa-shopping-basket"></i></a></div>
                            <div class="payment-basket__status__basket"><span
                                        class="payment-basket__status__basket-value">0</span><span
                                        class="payment-basket__status__basket-value-descr">товаров</span></div>
                        </div>
                    </div>
                    @if(!Auth::user())
                        <div class="authorization-block">
                            <a href="{{ route('login') }}" class="authorization-block__link">Войти</a>
                            <a href="{{ route('register') }}" class="authorization-block__link">Регистрация</a>
                        </div>
                    @endif
                </div>
            </header>
            <div class="middle">
                <div class="sidebar">

                    @include('layouts.category')

                    <div class="sidebar-item">
                        <div class="sidebar-item__title">Последние новости</div>
                        <div class="sidebar-item__content">
                            <div class="sidebar-news">
                                <div class="sidebar-news__item">
                                    <div class="sidebar-news__item__preview-news"><img
                                                src="{{asset('img/cover/game-2.jpg')}}"
                                                alt="image-new"
                                                class="sidebar-new__item__preview-new__image">
                                    </div>
                                    <div class="sidebar-news__item__title-news"><a href="#"
                                                                                   class="sidebar-news__item__title-news__link">О
                                            новых играх в режиме VR</a></div>
                                </div>
                                <div class="sidebar-news__item">
                                    <div class="sidebar-news__item__preview-news"><img
                                                src="{{asset('img/cover/game-1.jpg')}}"
                                                alt="image-new"
                                                class="sidebar-new__item__preview-new__image">
                                    </div>
                                    <div class="sidebar-news__item__title-news"><a href="#"
                                                                                   class="sidebar-news__item__title-news__link">О
                                            новых играх в режиме VR</a></div>
                                </div>
                                <div class="sidebar-news__item">
                                    <div class="sidebar-news__item__preview-news"><img
                                                src="{{asset('img/cover/game-4.jpg')}}"
                                                alt="image-new"
                                                class="sidebar-new__item__preview-new__image">
                                    </div>
                                    <div class="sidebar-news__item__title-news"><a href="#"
                                                                                   class="sidebar-news__item__title-news__link">О
                                            новых играх в режиме VR</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-top">
                        <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить
                            компкт диск,
                            скачать Steam игры после оплаты
                        </div>
                        <div class="slider"><img src="{{asset('img/slider.png')}}" alt="Image" class="image-main"></div>
                    </div>
                    <div class="content-middle">
                        <div class="content-head__container">
                            <div class="content-head__title-wrap">
                                <div class="content-head__title-wrap__title bcg-title">{{$product->name}} в
                                    разделе {{$product->category->name}}</div>
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
                            <div class="product-container">
                                <div class="product-container__image-wrap"><img src="/uploads/{{$product->image_name}}"
                                                                                class="image-wrap__image-product"></div>
                                <div class="product-container__content-text">
                                    <div class="product-container__content-text__title">{{$product->name}}</div>
                                    <div class="product-container__content-text__price">
                                        <div class="product-container__content-text__price__value">
                                            Цена: <b>{{$product->price}}</b>
                                            руб
                                        </div>
                                        <a href="#" id="btn_modal" class="btn btn-blue" data-attr="{{$product->id}}">Купить</a>
                                    </div>
                                    <div class="product-container__content-text__description">
                                        <p>
                                            {{$product->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="line"></div>
                        <div class="content-head__container">
                            <div class="content-head__title-wrap">
                                <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                            </div>
                        </div>
                        <div class="content-main__container">
                            <div class="products-columns">
                                <div class="products-columns__item">
                                    <div class="products-columns__item__title-product"><a href="#"
                                                                                          class="products-columns__item__title-product__link">The
                                            Witcher 3: Wild Hunt</a></div>
                                    <div class="products-columns__item__thumbnail"><a href="#"
                                                                                      class="products-columns__item__thumbnail__link"><img
                                                    src="{{asset('img/cover/game-1.jpg')}}" alt="Preview-image"
                                                    class="products-columns__item__thumbnail__img"></a></div>
                                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a
                                                href="#" class="btn btn-blue">Купить</a></div>
                                </div>
                                <div class="products-columns__item">
                                    <div class="products-columns__item__title-product"><a href="#"
                                                                                          class="products-columns__item__title-product__link">Overwatch</a>
                                    </div>
                                    <div class="products-columns__item__thumbnail"><a href="#"
                                                                                      class="products-columns__item__thumbnail__link"><img
                                                    src="{{asset('img/cover/game-2.jpg')}}" alt="Preview-image"
                                                    class="products-columns__item__thumbnail__img"></a></div>
                                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a
                                                href="#" class="btn btn-blue">Купить</a></div>
                                </div>
                                <div class="products-columns__item">
                                    <div class="products-columns__item__title-product"><a href="#"
                                                                                          class="products-columns__item__title-product__link">Deus
                                            Ex: Mankind Divided</a></div>
                                    <div class="products-columns__item__thumbnail"><a href="#"
                                                                                      class="products-columns__item__thumbnail__link"><img
                                                    src="{{asset('img/cover/game-3.jpg')}}" alt="Preview-image"
                                                    class="products-columns__item__thumbnail__img"></a></div>
                                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a
                                                href="#" class="btn btn-blue">Купить</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <footer class="footer">
            <div class="footer__footer-content">
                <div class="random-product-container">
                    <div class="random-product-container__head">Случайный товар</div>
                    <div class="random-product-container__content">
                        <div class="item-product">
                            <div class="item-product__title-product"><a href="#"
                                                                        class="item-product__title-product__link">The
                                    Witcher 3: Wild Hunt</a></div>
                            <div class="item-product__thumbnail"><a href="#"
                                                                    class="item-product__thumbnail__link"><img
                                            src="{{asset('img/cover/game-1.jpg')}}" alt="Preview-image"
                                            class="item-product__thumbnail__link__img"></a></div>
                            <div class="item-product__description">
                                <div class="item-product__description__products-price"><span
                                            class="products-price">400 руб</span></div>
                                <div class="item-product__description__btn-block"><a href="#"
                                                                                     class="btn btn-blue">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__footer-content__main-content">
                    <p>
                        Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                        онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                        У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                        и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                        коды продления и многое друго. Также здесь всегда можно узнать последние новости
                        из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                        актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                        что немаловажно, выгодно!
                    </p>
                </div>
            </div>
            <div class="footer__social-block">
                <ul class="social-block__list bcg-social">
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i
                                    class="fa fa-facebook"></i></a></li>
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i
                                    class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </footer>
        </div>
    </main>
    <div class="modal-overlay">
        <div class="modal"><a class="close-modal">
                <svg viewBox="0 0 20 20">
                    <path fill="#918b83"
                          d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                </svg>
            </a>
            <div                    class="modal-content">
                <form method="post" class="form" action="/product/save" onsubmit="submitForm(event, this)">
                    @csrf
                    <div class="form__title">Укажите ваше имя и телефон, и мы свяжемся с вами в ближайшее время</div>
                    <input type="text" value="" name="name" placeholder="Ваше имя" required="required" />
                    <input type="email" value="@if (Auth::user()) {{Auth::user()->email}} @endif" name="email" placeholder="Ваш email" required="required" />
                    <p class="form__text">Нажимая на кнопку "Оставить заявку" я даю свое согласие на обработку
                        персональных данных</p>
                    <input type="submit" class="form__btn-link" value="Отправить заявку">
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>





