@extends('layouts.base')

@section('pageCss')    
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('pageJs')
    <script src="{{ asset('js/slick.min.js') }}"></script>
@endsection

@section('title', ' | Menu')

@section('hero_title', 'Menu')    

@section('content')
{{-- モーダルウィンドウ --}}
<div class="modal-wrapper">
    <div class="modal-contents-container">
        <i class="fas fa-3x fa-times modal-close"></i>
        <img alt="" class="modal-menu-image" src="">
        <div class="modal-menu-detail-container">
            <div class="wrapper">
                <h3 class="menu-name">メニュー名が入ります</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            </div>
            <div class="price-wrapper">
                <p class="price">¥xxx（税込¥xxx）</p>
                <p>※テイクアウトの場合、消費税率が異なります</p>
            </div>
        </div>
    </div>
</div>
{{-- モーダルウィンドウここまで --}}
<section class="main-contents w-container">
    <h2>Seasonal</h2>
    <div class="menu-inner-wrapper">
        <div class="slider-wrapper">
            <img class="slider-item" src="{{ asset('images/menu/slick_cake.jpg') }}" alt="">
            <img class="slider-item" src="{{ asset('images/menu/slick_chef.jpg') }}" alt="">
            <img class="slider-item" src="{{ asset('images/menu/slick_coffee.jpg') }}" alt="">
            <img class="slider-item" src="{{ asset('images/menu/slick_sandwich.jpg') }}" alt="">
            {{-- <div class="slider-item"></div> --}}
        </div>
        <h2 class="page-title">Menu</h2>
        <div id="menu-item" class="menu-list">
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_salad_1.jpg') }}" alt="">
                <p>いろどり野菜のサラダ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_salad_2.jpg') }}" alt="">
                <p>シーザーサラダ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_pasta_1.jpg') }}" alt="">
                <p>アマトリチャーナ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_pasta_2.jpg') }}" alt="">
                <p>なめらかクリームのカルボナーラ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_pizza_1.jpg') }}" alt="">
                <p>こだわりモッツァレラチーズのピザ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_drink_cafe_latte.jpg') }}" alt="">
                <p>ホットカフェラテ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_cake_1.jpg') }}" alt="">
                <p>ショコラケーキ</p>
            </div>
            <div class="menu-item scr-target">
                <img class="menu-img new-icon" src="{{ asset('images/menu/menu_sinamon_roll.jpg') }}" alt="">
                <p>シナモンロール</p>
            </div>
        </div>
    </div>
</section>

<section id="app">
    <transition>
        <div v-show="buttonActive" class="to-top-btn" @click="scrollTop">
            <i class="fas fa-4x fa-chevron-circle-up"></i>
        </div>
    </transition>
</section>
@endsection


@section('pageScript')
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scrollHandle.js') }}"></script>
@endsection