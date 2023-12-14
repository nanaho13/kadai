<!DOCTYPE! html>
<html lamg="ja">
    <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="list.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=diworks_account;host=localhost;","root","root");
        $stmt = $pdo->query("select * from account");
        ?>
        <header>
            <img src="diblog_logo.jpg" class="logo">
            <ul>
            <li><a href="diblog.html">トップ</a></li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            <li><a href="regist.php">アカウント登録</a></li>
                <li><a href="list.php">アカウント一覧</a></li>
            </ul>
        </header>
        <main>
            <h3>削除画面</h3>