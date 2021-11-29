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
        <i class="fas fa-2x fa-times"></i>
    </div>
</div>
{{-- モーダルウィンドウここまで --}}
<section class="main-contents w-container">
    <h2>Seasonal</h2>
    <div class="menu-inner-wrapper">
        <div class="slider-wrapper">
            <img class="slider-item" src="{{ asset('images/menu-2.jpg') }}" alt="">
            <img class="slider-item" src="{{ asset('images/shard-g794920a6f_1920.jpg') }}" alt="">
            <img class="slider-item" src="{{ asset('images/new_menu_cake.jpg') }}" alt="">
            <div class="slider-item"></div>
            <div class="slider-item"></div>
        </div>
        <h2 class="page-title">Menu</h2>
        <div id="menu-item" class="menu-list">
            <div class="menu-item">
                <img class="menu-img new-icon" src="{{ asset('images/menu-1.jpg') }}" alt="">
                <p>アマトリチャーナ</p>
            </div>
            <div class="menu-item">
                <img class="menu-img new-icon" src="{{ asset('images/menu-2.jpg') }}" alt="">
                <p>いろどり野菜のサラダ</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img3</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img4</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img5</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img6</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img7</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img8</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
            <div class="menu-item">
                <div class="menu-img">img</div>
                <p>メニュー名が入りますメニュー名が入ります</p>
            </div>
        </div>
        
    </div>
</section>
@endsection

@section('pageScript')
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
@endsection