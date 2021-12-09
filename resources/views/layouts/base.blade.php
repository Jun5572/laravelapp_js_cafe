<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- フォント --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    {{-- 共通スタイル --}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    {{-- 各ページスタイル --}}
    @yield('pageCss')
    {{-- 各ページjs --}}
    @yield('pageJs')
    {{-- 各ページタイトル --}}
    <title>J's Cafe @yield('title')</title>
    {{-- 共通script --}}
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body id="body">
<header class="header w-container">
    @include('layouts.header')
</header>

@hasSection ('title')
    @include('layouts.hero')
@endif
        
<main>
    @yield('content')
</main>

@hasSection ('title')
<footer>
    @include('layouts.footer')
</footer>    
@endif

<script src="{{ asset('js/common.js') }}"></script>
@yield('pageScript')
</body>
</html>