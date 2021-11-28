<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>J's Cafe | News</title>
</head>
<body>
    <section class="hero">
        <div class="hero-img"></div>
        <div class="hero-container w-container">
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
    <section class="main-contents w-container">
        <div class="side-container">
            <!-- liタグに置き換え -->
            <div class="category-container">
                <h3>CATEGORY</h3>
                <button class="current">すべて</button>
                <button>サービス</button>
                <button>SNS</button>
                <button>新発売</button>
            </div>
            <!-- liタグに置き換え -->
            <div class="archives-container">
                <h3>ARCHIVES</h3>
                <a href="#">2021年XX月XX日</a>
                <a href="#">2021年XX月XX日</a>
                <a href="#">2021年XX月XX日</a>
                <a href="#">2021年XX月XX日</a>
            </div>
        </div>
        <div class="news-container">
            <table>
                <tbody>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span class="new">新発売</span>
                        </th>
                        <td>
                            <a class="news-title" href="{{ url('news/show') }}">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span class="sns">SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span class="service">サービス</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>サービス</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年XX月XX日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">タイトルが入りますタイトルが入ります</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="pagination-container w-container">
        <ul class="pagination">
            <li class="pre">
                <a href="#"><span><i class="fas fa-arrow-left"></i></span></a>
            </li>
            <li>
                <a href="#"><span>1</span></a>
            </li>
            <li>
                <a class="current-page" href="#"><span>2</span></a>
            </li>
            <li>
                <a href="#"><span>3</span></a>
            </li>
            <li>
                <a href="#"><span>4</span></a>
            </li>
            <li>
                <a href="#"><span>5</span></a>
            </li>
            <li>
                <a href="#"><span>6</span></a>
            </li>
            <li class="next">
                <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
            </li>
        </ul>
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