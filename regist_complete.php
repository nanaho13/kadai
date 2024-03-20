<?php
$method ='aes-256-cbc';
$key ='anngou-key123456';
$iv ='anngou-key123456';
$data = $_POST['password'];
$encrypted = openssl_encrypt($data, $method, $key, 0, $iv);

try {
    $pdo = new PDO("mysql:dbname=diworks_account;host=localhost;","root","root");
    $ret= $pdo ->exec("insert into account(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority) values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$encrypted."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");
    if (!$ret) {
        echo "<FONT COLOR=red>エラーが発生したためアカウント登録できません。</FONT>";
        exit();
    }
} catch (PDOException $e) {
    echo "<FONT COLOR=red>エラーが発生したためアカウント登録できません。</FONT>" ;
    exit();
}?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="regist_complete.css">
  </head>
  <body>
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
            <h3>アカウント登録完了画面</h3>
            <h1>登録完了しました</h1>
            <form action="diblog.html">
                <input type="submit" class="button1" value="TOPページに戻る">
            </form>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>