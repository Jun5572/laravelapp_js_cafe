@extends('layouts.base')


@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/concept.css') }}">
@endsection

@section('title', ' | Concept')

@section('hero_title', 'Concept')

@section('content')
<section class="main-contents w-container">
    <div class="head-text-container">
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </div>
</section>
<section class="main-visual-img w-container">
    <div class="text-container">
        <h3 class="title">ABOUT J's Cafe</h3>
        <p>テキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入ります</p>
        <p>テキストが入りますテキストが入りますテキストが入ります</p>
    </div>
</section>
<section class="commitment-container w-container">
    <img class="commit-img" src="{{ asset('images/pablo-merchan-montes-SCbq6uKCyMY-unsplash.jpg') }}">
    <img class="commit-img" src="{{ asset('images/luke-porter-ud6XcK_MUGI-unsplash.jpg') }}">
    <div class="text-container">
        <h3 class="title">Commitment</h3>
        <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
        <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
        <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
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
    <script src="{{ asset('js/scrollHandle.js') }}"></script>
@endsection
