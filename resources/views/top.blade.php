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
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
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
                <li><a href="../views/menu.blade.php">MENU</a></li>
                <li><a href="../concept/concept.html">CONCEPT</a></li>
            </ul>
        </nav>
    </header>
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
    <script src="{{ asset('js/common.js') }}"></script>
</body>
</html>