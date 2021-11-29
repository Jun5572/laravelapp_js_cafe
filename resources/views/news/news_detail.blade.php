@extends('layouts.base')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/news_detail.css') }}">
@endsection

@section('title', ' | News')

@section('hero_title', 'News')
    
@section('content')
    <section class="main-container w-container contents">
        <h3 class="title">タイトルが入りますタイトルが入ります</h3>
        <div class="news-head">
            <p>2021年XX月XX日</p>
            <span class="new">新発売</span>
        </div>
        <div class="news-body">
            <div class="head-text-container">
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            </div>
            <div class="img-text-container">
                <img class="img-container" src="{{ asset('images/new_menu_cake.jpg') }}">
                <div class="text-container">
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                </div>
            </div>
        </div>
        <a class="back-icon" href="{{ url('/news') }}">お知らせ一覧に戻る</a>
    </section>
@endsection