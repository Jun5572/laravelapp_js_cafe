<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_detail.css') }}">
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <title>J's Cafe | News detail</title>
</head>
<body>
    <section class="hero w-container">
        <div class="hero-img"></div>
        <div class="hero-container">
            <header class="header">
                <a href="{{ url('/') }}" class="logo">logo</a>
                <nav>
                    <ul>
                        <li><a href="{{ url('/news') }}">NEWS</a></li>
                        <li><a href="{{ url('/menu') }}">MENU</a></li>
                        <li><a href="{{ url('/concept') }}">CONCEPT</a></li>
                    </ul>
                </nav>
            </header>
            <div class="hero-title">
                <h1>News</h1>
            </div>
        </div>
    </section>
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
    <footer>
        <ul class="footer-menu">
            <li><a href="../contact/contact.html">CONTACT</a></li>
            <li><a href="../recruit/recruit.html">RECRUIT</a></li>
            <li><a href="../privacy_policy/privacy_policy.html">PRIVACY POLICY</a></li>
        </ul>
        <p><i class="far fa-copyright"></i>2021 Jun Takizawa</p>
    </footer>
</body>
</html>