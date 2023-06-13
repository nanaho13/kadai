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
            <form method="post" action="regist_confirm.php">
                <table border="0">
                    <tr>
                        <div>
                            <td><label>名前 (姓)</label></td>
                            <td><input type="text" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="name" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>名前 (名)</label></td>
                            <td><input type="text" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="name" size=35 class="text"　maxlength"10"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>カナ (姓)</label></td>
                            <td><input type="text" maxlength="10" pattern="^[ァ-ンヴー]+$ , [\u30A1-\u30FF]*" name="name" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>カナ (名)</label></td>
                            <td><input type="text" maxlength="10" pattern="^[ァ-ンヴー]+$ , [\u30A1-\u30FF]*" name="name" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>メールアドレス</label></td>
                            <td><input type="email" maxlength="100" pattern="^[0-9A-Za-z@\-.]+$" name="mail" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>パスワード</label></td>
                            <td><input type="password" name="pass" size=35 class="text" pattern="^[a-zA-Z0-9]+$" maxlength="10"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>性別</label></td>
                            <td><input type="radio" name="gender" size=35 class="text" checked>男
                            <input type="radio" name="gender" size=35 class="text">女</td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>郵便番号</label></td>
                            <td><input type="text" maxlength="7" name="name" size=10 class="text" pattern="\d{3}-?\d{4}"></td>
                        </div>
                    <tr>
                        <div>
                            <td><label>住所 (都道府県)</label></td>
                            <td><select name="pref" class="text">
                                <option value="" selected></option>
                                <option value="1">北海道</option>
                                <option value="2">青森県</option>
                                <option value="3">岩手県</option>
                                <option value="4">宮城県</option>
                                <option value="5">秋田県</option>
                                <option value="6">山形県</option>
                                <option value="7">福島県</option>
                                <option value="8">茨城県</option>
                                <option value="9">栃木県</option>
                                <option value="10">群馬県</option>
                                <option value="11">埼玉県</option>
                                <option value="12">千葉県</option>
                                <option value="13">東京都</option>
                                <option value="14">神奈川県</option>
                                <option value="15">新潟県</option>
                                <option value="16">富山県</option>
                                <option value="17">石川県</option>
                                <option value="18">福井県</option>
                                <option value="19">山梨県</option>
                                <option value="20">長野県</option>
                                <option value="21">岐阜県</option>
                                <option value="22">静岡県</option>
                                <option value="23">愛知県</option>
                                <option value="24">三重県</option>
                                <option value="25">滋賀県</option>
                                <option value="26">京都府</option>
                                <option value="27">大阪府</option>
                                <option value="28">兵庫県</option>
                                <option value="29">奈良県</option>
                                <option value="30">和歌山県</option>
                                <option value="31">鳥取県</option>
                                <option value="32">島根県</option>
                                <option value="33">岡山県</option>
                                <option value="34">広島県</option>
                                <option value="35">山口県</option>
                                <option value="36">徳島県</option>
                                <option value="37">香川県</option>
                                <option value="38">愛媛県</option>
                                <option value="39">高知県</option>
                                <option value="40">福岡県</option>
                                <option value="41">佐賀県</option>
                                <option value="42">長崎県</option>
                                <option value="43">熊本県</option>
                                <option value="44">大分県</option>
                                <option value="45">宮崎県</option>
                                <option value="46">鹿児島県</option>
                                <option value="47">沖縄県</option><br>
                                </select></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>住所 (市区町村)</label></td>
                            <td><input type="text" maxlength="10" pattern="[ぁ-んァ-ヶｦ-ﾟ一-龠０-９0-9\-\sー]+" name="name" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>住所 (番地)</label></td>
                            <td><input type="text" maxlength="100" pattern="[ぁ-んァ-ヶｦ-ﾟ一-龠０-９0-9\-\sー]+" name="name" size=35 class="text"></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td><label>アカウント権限</label></td>
                            <td><select name="account" class="text">
                                <option value="XXX" selected>一般</option>
                                <option value="XXX">管理者</option>
                                </select></td>
                        </div>
                    </tr>
                </table>
                <input type="submit" class="submit" value="確認する"><br>
            </form>
        </main>
        <footer>
        CopyrightD.I.eorks|D.I.blog is the one which provides A to Z about programming
        </footer>
    </body>
</html>