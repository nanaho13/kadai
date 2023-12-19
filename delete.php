<!DOCTYPE! html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="delete.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        try{
            $pdo = new PDO("mysql:dbname=diworks_account;host=localhost;","root","root");
            } catch (PDOException $error) {
            exit("データベースに接続できませんでした。<br>" . $error->getMessage());
        }
        $stmt = $pdo->query("select * from account where id ='" . $_POST["id"] . "'");
        $row = $stmt->fetch()
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
            <h3>アカウント削除画面</h3>
            <table border="0">
                <tr>
                    <div>
                        <td><label>名前 (姓)</label></td>
                        <td><?php echo $row['family_name'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>名前 (名)</label></td>
                        <td><?php echo $row['last_name'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>カナ (姓)</label></td>
                        <td><?php echo $row['family_name_kana'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>カナ (名)</label></td>
                        <td><?php echo $row['last_name_kana'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>メールアドレス</label></td>
                        <td><?php echo $row['mail'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>パスワード</label></td>
                        <td><?php echo str_repeat('●', strlen($row['password']));?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>性別</label></td>
                        <td><?php if($row['gender'] == "0" ){ echo '男'; }
                            elseif ($row['gender'] == "1" ){ echo '女'; } ?></td>                        
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>郵便番号</label></td>
                        <td><?php echo $row['postal_code'];?></td>
                    </div>
                <tr>
                    <div>
                        <td><label>住所 (都道府県)</label></td>
                        <td><?php echo $row['prefecture'];?>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>住所 (市区町村)</label></td>
                        <td><?php echo $row['address_1'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>住所 (番地)</label></td>
                        <td><?php echo $row['address_2'];?></td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>アカウント権限</label></td>
                        <td><?php if($row['authority'] == "0" ){ echo '一般'; }
                            elseif ($row['authority'] == "1" ){ echo '管理者'; } ?></td>
                    </div>
                </tr>
            </table>
            <table>
                <tr>
                    <form method="post" action="delete_confirm.php">
                        <td><input type="submit" class="button1" value="確認する"></td>
                        <input type="hidden" value="<?php echo $row['family_name'];?>" name="family_name">
                        <input type="hidden" value="<?php echo $row['last_name'];?>" name="last_name">
                        <input type="hidden" value="<?php echo $row['family_name_kana'];?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $row['last_name_kana'];?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $row['mail'];?>" name="mail">
                        <input type="hidden" value="<?php echo $row['password'];?>" name="password">
                        <input type="hidden" value="<?php echo $row['gender'];?>" name="gender">
                        <input type="hidden" value="<?php echo $row['postal_code'];?>" name="postal_code">
                        <input type="hidden" value="<?php echo $row['prefecture'];?>" name="prefecture">
                        <input type="hidden" value="<?php echo $row['address_1'];?>" name="address_1">
                        <input type="hidden" value="<?php echo $row['address_2'];?>" name="address_2">
                        <input type="hidden" value="<?php echo $row['authority'];?>" name="authority">
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
