
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
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <script src="https://kit.fontawesome.com/d9203d9956.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>J's Cafe</title>
</head>
<body>
    <section class="main-contents w-container">
        <div class="inner-wrapper">
            <h2>Thank You!</h2>
            <div class="text-wrapper">
                <p>お問い合わせありがとうございました。</p>
                <p>ご入力頂いた内容を確認後、３営業日以内に返信いたします。</p>
            </div>
            <div class="sns-wrapper">
                <a href="#">
                    <i class="fab fa-twitter fa-2x"><span>Twitter</span></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram fa-2x"><span>Instagram</span></i>
                </a>
                <a href="#">
                    <i class="fab fa-line fa-2x"><span>LINE</span></i>
                </a>
            </div>
            <a class="to-top-link" href="{{ url('/') }}">TOPページに戻る</a>
        </div>
    </section>
</body>
</html>