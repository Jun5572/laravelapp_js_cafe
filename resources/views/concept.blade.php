<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/concept.css') }}">
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>J's Cafe</title>
</head>
<body>
    <header class="header w-container">
        <a href="../top/top.html" class="logo">logo</a>
        <nav>
            <ul>
                <li><a href="../news/news.html">NEWS</a></li>
                <li><a href="../menu/menu.html">MENU</a></li>
                <li><a href="../concept/concept.html">CONCEPT</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero w-container">
        <div class="hero-img"></div>
        <div class="hero-container">
            <div class="hero-title">
                <h1>Concept</h1>
            </div>
        </div>
    </section>
    <section class="main-contents w-container">
        <div class="head-text-container">
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
    </section>
    <section class="main-visual-img">
        <div class="text-container">
            <h3 class="title">ABOUT J's Cafe</h3>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
        </div>
    </section>
    <section class="commitment-container">
        <img class="commit-img" src="{{ asset('images/pablo-merchan-montes-SCbq6uKCyMY-unsplash.jpg') }}">
        <img class="commit-img" src="{{ asset('images/luke-porter-ud6XcK_MUGI-unsplash.jpg') }}">
        <div class="text-container">
            <h3 class="title">Commitment</h3>
            <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
            <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
            <p>ここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
        </div>
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