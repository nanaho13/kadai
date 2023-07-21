<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>D.I.Blog</title>
      <link rel="stylesheet" type="text/css" href="regist.css">
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
            </ul>
        </header>
        <main>
            <h3>アカウント登録画面</h3>
            <form method="post" action="regist_confirm.php" name="form"　id="form" >
                <table border="0">
                    <tr>
                        <td valign="top"><label for="family_name">名前 (姓)</label></td>
                        <td class="form-control"><input type="text" maxlength="10" name="family_name" size=35 class="text" id="family_name" value="<?php if( !empty($_POST['family_name']) ){ echo $_POST['family_name']; } ?>" >
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>名前 (名)</label></td>
                        <td class="form-control"><input type="text" maxlength="10" name="last_name" size=35 class="text" id="last_name" maxlength="10" value="<?php if( !empty($_POST['last_name']) ){ echo $_POST['last_name']; } ?>" >
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>カナ (姓)</label></td>
                        <td class="form-control"><input type="text" maxlength="10" name="family_name_kana" size=35 class="text" id="family_name_kana" value="<?php if( !empty($_POST['family_name_kana']) ){ echo $_POST['family_name_kana']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>カナ (名)</label></td>
                        <td class="form-control"><input type="text" maxlength="10"  name="last_name_kana"  size=35 class="text" id="last_name_kana" value="<?php if( !empty($_POST['last_name_kana']) ){ echo $_POST['last_name_kana']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>メールアドレス</label></td>
                        <td class="form-control"><input type="text" maxlength="100" name="mail" size=35 class="text" id="mail" value="<?php if( !empty($_POST['mail']) ){ echo $_POST['mail']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>パスワード</label></td>
                        <td class="form-control"><input type="password" name="password" size=35 class="text" id="password" maxlength="10" value="<?php if( !empty($_POST['password']) ){ echo $_POST['password']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>性別</label></td>
                        <td class="form-control"><input type="radio" name="gender" size=35 class="text" checked value="0" <?php if( !empty($_POST['gender']) && $_POST['gender'] === "0" ){ echo 'checked'; } ?>>男
                            <input type="radio" name="gender" size=35 class="text" value="1" <?php if( !empty($_POST['gender']) && $_POST['gender'] === "1" ){ echo 'checked'; } ?>>女
                                <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>郵便番号</label></td>
                        <td class="form-control"><input type="text" maxlength="7" name="postal_code" size=10 class="text" id="postal_code" value="<?php if( !empty($_POST['postal_code']) ){ echo $_POST['postal_code']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>住所 (都道府県)</label></td>
                        <td class="form-control"><select name="prefecture" class="text" id="prefecture">
                            <option value="" selected></option>
                            <option value="北海道" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "北海道" ){ echo 'selected'; } ?>>北海道</option>
                            <option value="青森" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "青森" ){ echo 'selected'; } ?>>青森県</option>
                            <option value="岩手" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岩手" ){ echo 'selected'; } ?>>岩手県</option>
                            <option value="宮城" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "宮城" ){ echo 'selected'; } ?>>宮城県</option>
                            <option value="秋田"<?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "秋田" ){ echo 'selected'; } ?>>秋田県</option>
                            <option value="山形" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山形" ){ echo 'selected'; } ?>>山形県</option>
                            <option value="福島" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福島" ){ echo 'selected'; } ?>>福島県</option>
                            <option value="茨城" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "茨城" ){ echo 'selected'; } ?>>茨城県</option>
                            <option value="栃木" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "栃木" ){ echo 'selected'; } ?>>栃木県</option>
                            <option value="群馬" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "群馬" ){ echo 'selected'; } ?>>群馬県</option>
                            <option value="埼玉" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "埼玉" ){ echo 'selected'; } ?>>埼玉県</option>
                            <option value="千葉" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "千葉" ){ echo 'selected'; } ?>>千葉県</option>
                            <option value="東京" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "東京" ){ echo 'selected'; } ?>>東京</option>
                            <option value="神奈川" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "神奈川" ){ echo 'selected'; } ?>>神奈川県</option>
                            <option value="新潟" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "新潟" ){ echo 'selected'; } ?>>新潟県</option>
                            <option value="富山" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "富山" ){ echo 'selected'; } ?>>富山県</option>
                            <option value="石川" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "石川" ){ echo 'selected'; } ?>>石川県</option>
                            <option value="福井" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福井" ){ echo 'selected'; } ?>>福井県</option>
                            <option value="山梨" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山梨" ){ echo 'selected'; } ?>>山梨県</option>
                            <option value="長野" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "長野" ){ echo 'selected'; } ?>>長野県</option>
                            <option value="岐阜" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岐阜" ){ echo 'selected'; } ?>>岐阜県</option>
                            <option value="静岡" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "静岡" ){ echo 'selected'; } ?>>静岡県</option>
                            <option value="愛知" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "愛知" ){ echo 'selected'; } ?>>愛知県</option>
                            <option value="三重" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "三重" ){ echo 'selected'; } ?>>三重県</option>
                            <option value="滋賀" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "滋賀" ){ echo 'selected'; } ?>>滋賀県</option>
                            <option value="京都" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "京都" ){ echo 'selected'; } ?>>京都</option>
                            <option value="大阪" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "大阪" ){ echo 'selected'; } ?>>大阪</option>
                            <option value="兵庫" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "兵庫" ){ echo 'selected'; } ?>>兵庫県</option>
                            <option value="奈良" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "奈良" ){ echo 'selected'; } ?>>奈良県</option>
                            <option value="和歌山" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "和歌山" ){ echo 'selected'; } ?>>和歌山県</option>
                            <option value="鳥取" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "鳥取" ){ echo 'selected'; } ?>>鳥取県</option>
                            <option value="島根" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "島根" ){ echo 'selected'; } ?>>島根県</option>
                            <option value="岡山" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岡山" ){ echo 'selected'; } ?>>岡山県</option>
                            <option value="広島" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "広島" ){ echo 'selected'; } ?>>広島県</option>
                            <option value="山口" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山口" ){ echo 'selected'; } ?>>山口県</option>
                            <option value="徳島" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "徳島" ){ echo 'selected'; } ?>>徳島県</option>
                            <option value="香川" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "香川" ){ echo 'selected'; } ?>>香川県</option>
                            <option value="愛媛" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "愛媛" ){ echo 'selected'; } ?>>愛媛県</option>
                            <option value="高知" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "高知" ){ echo 'selected'; } ?>>高知県</option>
                            <option value="福岡" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福岡" ){ echo 'selected'; } ?>>福岡県</option>
                            <option value="佐賀" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "佐賀" ){ echo 'selected'; } ?>>佐賀県</option>
                            <option value="長崎" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "長崎" ){ echo 'selected'; } ?>>長崎県</option>
                            <option value="熊本" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "熊本" ){ echo 'selected'; } ?>>熊本県</option>
                            <option value="大分" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "大分" ){ echo 'selected'; } ?>>大分県</option>
                            <option value="宮崎" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "宮崎" ){ echo 'selected'; } ?>>宮崎県</option>
                            <option value="鹿児島" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "鹿児島" ){ echo 'selected'; } ?>>鹿児島県</option>
                            <option value="沖縄" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "沖縄" ){ echo 'selected'; } ?>>沖縄県</option><br>
                            </select>
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>住所 (市区町村)</label></td>
                        <td class="form-control"><input type="text" maxlength="10" name="address_1" size=35 class="text" id="address_1" value="<?php if( !empty($_POST['address_1']) ){ echo $_POST['address_1']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>住所 (番地)</label></td>
                        <td class="form-control"><input type="text" maxlength="100" name="address_2" size=35 class="text" id="address_2" value="<?php if( !empty($_POST['address_2']) ){ echo $_POST['address_2']; } ?>">
                            <p>Error Message</p>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><label>アカウント権限</label></td>
                        <td class="form-control"><select name="authority" class="text" id="authority">
                            <option value="0" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "0" ){ echo 'selected'; } ?> selected >一般</option>
                            <option value="1" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "1" ){ echo 'selected'; } ?>>管理者</option>
                            </select>
                            <p></p>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="submit" value="確認する" id="button" name="submit"><br>
            </form>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
        <script type="text/javascript" src="regist.js" ></script>
    </body>
</html>