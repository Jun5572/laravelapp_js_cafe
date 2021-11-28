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
    <link rel="stylesheet" href="{{ url('css/contact.css', []) }}">
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
    <section class="hero">
        <div class="hero-img"></div>
        <div class="hero-container w-container">
            <div class="hero-title">
                <h1>Contact</h1>
            </div>
        </div>
    </section>

    <h2>Contact Form</h2>
    <section class="contact-form-wrapper w-container">
        <form method="post" action="thanks.html">
            <table class="contact-form-table">
                <tbody>
                    <tr>
                        <th>
                            お名前
                            <span class="required-icon">必須</span>
                        </th>
                        <td>
                            <input type="text" name="your-name" id="" placeholder="珈琲太郎" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            メールアドレス
                            <span class="required-icon">必須</span>
                        </th>
                        <td>
                            <input type="email" name="your-email" id="" placeholder="xxxxxx@xxx" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            電話番号
                            <span class="required-icon">必須</span>
                        </th>
                        <td>
                            <input type="tel" name="your-phone-number" id="" placeholder="090-0000-0000" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            カテゴリ
                            <span class="required-icon">必須</span>
                        </th>
                        <td>
                            <select name="contact-cate" id="contact-cate" required>
                                <option value="0" selected>選択してください</option>
                                <option value="1" >プルダウン１</option>
                                <option value="2" >プルダウン２</option>
                                <option value="2" >とりあえずプルダウン３</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-head">
                            内容
                            <span class="optional-icon">任意</span>
                        </th>
                        <td>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-wrapper">
                <button class="btn-lg confirm" type="submit" value="confirm" >内容を確認</button>
            </div>
            <a href="./thanks.html">Thanks</a>
            <a href="./confirm.html">confirm</a>
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