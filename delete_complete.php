<?php
mb_internal_encoding("utf8");

try {
    $pdo = new PDO("mysql:dbname=diworks_account;host=localhost;","root","root");
    $stmt = $pdo->prepare("UPDATE account SET delete_flag=? WHERE id = ? ");
    
    $stmt->execute(array('1',$_POST['id']));
} catch (PDOException $e) {
    echo "<FONT COLOR=red>エラーが発生したためアカウント更新できません。</FONT>" . $e->getMessage();
    exit();
}?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="delete_complete.css">
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
            <h3>アカウント削除完了画面</h3>
            <h1>削除完了しました</h1>
            <form action="diblog.html">
                <input type="submit" class="button1" value="TOPページに戻る">
            </form>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>