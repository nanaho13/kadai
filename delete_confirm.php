<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="delete_confirm.css">
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
            <h3>アカウント削除確認画面</h3>
            <h1>本当に削除してもよろしいですか？</h1>
            <table>
                <tr>
                    <form method="post" action="delete.php">
                        <td><input type="submit" class="button1" value="前に戻る"></td>
                        <input type="hidden" value="<?php echo $_POST['family_name'];?>" name="family_name">
                        <input type="hidden" value="<?php echo $_POST['last_name'];?>" name="last_name">
                        <input type="hidden" value="<?php echo $_POST['family_name_kana'];?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $_POST['last_name_kana'];?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                        <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                        <input type="hidden" value="<?php echo $_POST['postal_code'];?>" name="postal_code">
                        <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
                        <input type="hidden" value="<?php echo $_POST['address_1'];?>" name="address_1">
                        <input type="hidden" value="<?php echo $_POST['address_2'];?>" name="address_2">
                        <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
                        <input type="hidden" value="<?php echo $_POST['id'];?>" name="id">
                    </form> 
                    <form method="post" action="delete_complete.php"> 
                        <td><input type="submit" class="button2" value="削除する"></td>
                        <input type="hidden" value="<?php echo $_POST['family_name'];?>" name="family_name">
                        <input type="hidden" value="<?php echo $_POST['last_name'];?>" name="last_name">
                        <input type="hidden" value="<?php echo $_POST['family_name_kana'];?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $_POST['last_name_kana'];?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                        <input type="hidden" value="<?php　echo $_POST['password'];?>" name="password">
                        <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                        <input type="hidden" value="<?php echo $_POST['postal_code'];?>" name="postal_code">
                        <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
                        <input type="hidden" value="<?php echo $_POST['address_1'];?>" name="address_1">
                        <input type="hidden" value="<?php echo $_POST['address_2'];?>" name="address_2">
                        <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
                        <input type="hidden" value="<?php echo $_POST['id'];?>" name="id">
                    </form>
                </tr>
            </table>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>