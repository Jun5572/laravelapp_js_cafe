@extends('layouts.base')


@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/concept.css') }}">
@endsection

@section('title', ' | Concept')

@section('hero_title', 'Concept')

@section('content')
<section class="main-contents w-container">
    <div class="head-text-container">
        <h2>あなたの毎日に『価値ある<ruby>時<rt>と</rt>間<rt>き</rt></ruby>』を</h2>
        <p>To your daily "valuable time"</p>
    </div>
</section>
<section class="main-visual-img w-container scr-target">
    <div class="text-container scr-target">
        <h3 class="title">ABOUT <span>J's Cafe</span></h3>
        <p>「心地よい雰囲気」、「最高のクオリティの商品」、「心のこもったおもてなし」に努め、
皆様の毎日に寄り添いながら『価値ある時間』をお届けします。</p>
    </div>
</section>
<section class="commitment-container w-container">
    <img class="commit-img scr-target" src="{{ asset('images/concept/concept_commit_img_1.jpg') }}">
    <img class="commit-img scr-target" src="{{ asset('images/concept/concept_commit_img_2.jpg') }}">
    <div class="text-container scr-target">
        <h3 class="title">Commitment</h3>
        <p>美味しいコーヒーを飲んでいただくために、コーヒーの知識や技術を持ち合わせたバリスタがいます。</p>
        <p>スペシャルティコーヒーのテイスティングなど厳しい研修を積んだバリスタが淹れるドリンク各種を是非お楽しみください。</p>
        <p>ラテアートなども行っております。ご希望のお客様は是非お気軽にお声掛けください。</p>
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
