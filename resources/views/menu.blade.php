<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>J's Cafe</title>
</head>
<body>
    <section class="hero w-container">
        <div class="hero-img"></div>
        <div class="hero-container">
            <header class="header">
                <a href="../top/top.html" class="logo">logo</a>
                <nav>
                    <ul>
                        <li><a href="../news/news.html">NEWS</a></li>
                        <li><a href="../views/menu.blade.php">MENU</a></li>
                        <li><a href="../concept/concept.html">CONCEPT</a></li>
                    </ul>
                </nav>
            </header>
            <div class="hero-title">
                <h1>Menu</h1>
            </div>
        </div>
    </section>
    <div class="modal-wrapper">
        <img alt="" class="modal-image">
    </div>
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
    <footer>
        <ul class="footer-menu">
            <li><a href="{{ url('/contact') }}">CONTACT</a></li>
            <li><a href="{{ url('/recruit') }}">RECRUIT</a></li>
            <li><a href="{{ url('/plivacy_policy') }}">PRIVACY POLICY</a></li>
        </ul>
        <p><i class="far fa-copyright"></i>2021 Jun Takizawa</p>
    </footer>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>