<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>

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
    <section class="contact-form-wrapper w-container confirmation">
        <h2>Contact Confirmation</h2>
        <form method="post" action="{{ url('/contact/thanks') }}">
            <table class="contact-form-table">
                <tbody>
                    <tr>
                        <th>
                            <p>お名前</p>
                        </th>
                        <td>
                            <p>珈琲太郎</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>メールアドレス</p>
                        </th>
                        <td>
                            <p>xxxxxx@xxx</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>電話番号</p>
                        </th>
                        <td>
                            <p>090-0000-0000</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>カテゴリ</p>
                        </th>
                        <td>
                            <p>プルダウン１</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-head">
                            <p>内容</p>
                        </th>
                        <td>
                            <p>内容が入ります内容が入ります</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-wrapper">
                <a href="./contact.html">修正する</a>
                <button class="btn-md submit" type="submit" value="submit" >送信する</button>
            </div>
        </form>
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