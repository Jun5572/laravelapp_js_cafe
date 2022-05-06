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
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    {{-- 各ページjs --}}
    @yield('pageJs')
    {{-- 各ページタイトル --}}
    <title>J's Cafe</title>
    {{-- 共通script --}}
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body id="body">
    <div class="loading-wrapper">   <!-- ロード中画面を表示するwrapper -->
        <div class="outer-wrapper"> <!-- 全体の表示／非表示をコントロールするwrapper -->
            <header class="header w-container">
                <a href="{{ url('/') }}" class="logo">logo</a>
                <nav>
                    <ul>
                        <li><a href="{{ url('/news') }}">NEWS</a></li>
                        <li><a href="{{ url('/menu') }}">MENU</a></li>
                        <li><a href="{{ url('/concept') }}">CONCEPT</a></li>
                    </ul>
                </nav>
            </header>
            
            <section class="hero">
                <div class="hero-img">
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
                    
            <footer>
                <ul class="footer-menu">
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                    <li><a href="{{ url('/recruit') }}">RECRUIT</a></li>
                    <li><a href="{{ url('/privacy_policy') }}">PRIVACY POLICY</a></li>
                </ul>
                <p><i class="far fa-copyright"></i>2021 Jun Takizawa</p>
            </footer>    
        </div>  <!-- end .outer-wrapper -->
    </div>  <!-- end .loading-wrapper -->
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/top.js') }}"></script>
</body>
</html>