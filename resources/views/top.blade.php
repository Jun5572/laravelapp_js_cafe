@extends('layouts.base')


@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('title', '')

{{-- @section('hero_title', "Js' Cafe") --}}

<section class="hero">
    <div class="hero-img">
        <!-- TODO jsでスライドインを実装 -->
        <div class="sns-wrapper">
            <a href="#">
                <i class="fab fa-twitter-square fa-3x"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram fa-3x"></i>
            </a>
            <a href="#">
                <i class="fab fa-line fa-3x"></i>
            </a>
        </div>
    </div>
    <div class="hero-container w-container">
        <div class="hero-title">
            <h1>J's Cafe</h1>
        </div>
    </div>
</section>

@section('pageScript')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection