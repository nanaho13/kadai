<!DOCTYPE! html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="list.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        try{
            $pdo = new PDO("mysql:dbname=diworks_account;host=localhost;","root","root");
            } catch (PDOException $error) {
            exit("データベースに接続できませんでした。<br>" . $error->getMessage());
        }
        $stmt = $pdo->query("select * from account ORDER BY id DESC");
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
            <h3>アカウント一覧画面</h3>
            <table border="1" cellspacing="0">
                <tr>
                    <th width="100">ID</th>
                    <th width="100">名前（姓）</th>
                    <th width="100">名前（名）</th>
                    <th width="100">カナ（姓）</th>
                    <th width="100">カナ（名）</th>
                    <th width="140">メールアドレス</th>
                    <th width="100">性別</th>
                    <th width="140">アカウント権限</th>
                    <th width="100">削除フラグ</th>
                    <th width="100">登録日時</th>
                    <th width="100">更新日時</th>
                    <th colspan="2">操作</th>
                </tr>
                <?php
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td align=right>".$row['id']."</td>";
                    echo "<td align=right>".$row['family_name']."</td>";
                    echo "<td align=right>".$row['last_name']."</td>";
                    echo "<td align=right>".$row['family_name_kana']."</td>";
                    echo "<td align=right>".$row['last_name_kana']."</td>";
                    echo "<td>".$row['mail']."</td>";
                    echo "<td align=center>";
                    if($row['gender']==0){ echo "男"; }
                    elseif($row['gender']==1){echo "女"; }"</td>";
                    echo "<td align=center>";
                    if($row['authority']==0){ echo "一般"; }
                    elseif($row['authority']==1){echo "管理者"; }"</td>";
                    echo "<td align=center>";
                    if(is_null($row['delete_flag'])){echo "NULL"; }
                    elseif($row['delete_flag']==0){ echo "有効"; }
                    elseif($row['delete_flag']==1){echo "無効"; }"</td>";
                    echo "<td align=center>".date('Y/n/j',strtotime($row['registered_time']))."</td>";
                    echo "<td align=center>".date('Y/n/j',strtotime($row['update_time']))."</td>";
                    echo "<td width=70  align=center>";
                    echo "<form action=update.php method='post'>";
                    echo"<input type=submit value=更新 class=submit >";
                    echo"<input type=hidden value=".$row['id']." name=id>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td width=70  align=center>";
                    echo "<form action=delete.php method='post'>";
                    echo"<input type=submit value=削除 class=submit>";
                    echo"<input type=hidden value=".$row['id']." name=id>";
                    echo"</form>";
                    echo"</td>";
                    echo"</tr>";
                }?>
            </table>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>
            