<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせ　| KUJIRA Cafe</title>
        <link rel="stylesheet" href="css/style.css">
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
                <h2>お問い合わせ</h2>
                <form method="post" action="sent.php">
                    <div>
                        <label for="kind">お問い合わせの種類</label><br>
                        <select name="kind" id="kind">
                            <option value="reservation">ご予約</option>
                            <option value="event">イベントついて</option>
                            <option value="contact">その他のお問い合わせ</option>
                        </select>
                    </div>
                    <div>
                        KUZIRA Cafeにご来店いただいたことはありますか。<br>
                        <label><input type="radio" name="first" value="yes" checked>はい</label>
                        <label><input type="radio" name="first" value="no">いいえ</label>
                    </div>
                    <div>
                        当カフェをお知りになったきっかけは？<br>
                        <label><input type="checkbox" name="how" value="friends">知り合いの紹介</label>
                        <label><input type="checkbox" name="how" value="magazine">雑誌・webサイトで見て</label>
                    </div>
                    <div>
                        <label>お問い合わせの件名<br>
                            <input type="text" name="subject" placeholder="お問い合わせ"></label>
                    </div>
                    <div>
                        <label> お問い合わせの具体的な内容<br>
                            <textarea name="message"></textarea></label>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="送信">
                    </div>
                </form>
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