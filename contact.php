<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせ　| KUJIRA Cafe</title>
        <link rel="stylesheet" href="css/sent.css">
    </head>

    <body>
        <div class="wrapper">
            <!-- ヘッダー -->
            <header class="header">
                <h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="KUZIRA Cafe"></a> </h1>
                <nav class="nav">
                    <ul>
                        <li><a href="index.html">ホーム</a></li>
                        <li><a href="about.html">店舗案内</a></li>
                        <li><a href="access.html">アクセス</a></li>
                        <li><a href="menu.html">メニュー</a></li>
                        <li><a href="contact.php">お問い合わせ</a></li>
                    </ul>
                </nav>
            </header>
            <!-- ヘッダー ここまで -->
            <!-- メイン -->
            <main>
                <div class="contact-form">
                <h2 class="title">お問い合わせの確認</h2>
                <div class="form-item">■ お問い合わせの種類</div>
                    <?php echo $_POST['kind']; ?>

                    <div class="form-item">■ KUZIRA Cafeにご来店いただいたことはありますか。</div>
                    <?php echo $_POST['first']; ?>

                    <div class="form-item">■ 当カフェをお知りになったきっかけは？</div>
                    
                    <?php echo $_POST['how'];?>
                    
                    <div class="form-item">■ お問い合わせの件名</div>
                    <?php echo $_POST['subject']; ?>

                    <div class="form-item">■ お問い合わせの具体的な内容</div>
                    <?php echo $_POST['message']; ?>
                    
                </div>
            </main>
            <!-- メインここまで -->
            <!-- フッター -->
            <footer class="footer">
                <p>&copy;Copylight KUZIRA Cafe. All rights reserved.</p>
            </footer>
            <!-- フッターここまで -->
        </div>
    </body>

</html>