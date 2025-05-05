<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
    </head>
    <body>
        <h1>アカウント登録画面</h1>
        <form method="post" action="">
            <div>
                <label>名前（姓）</label>
                <input type="text" class="text" name="family_name" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF]+" required>
            </div>
            
            <div>
                <label>名前（名）</label>
                <input type="text" class="text" name="last_name" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF]+" required>
            </div>
            
            <div>
                <label>カナ（姓）</label>
                <input type="text" class="text" name="family_name_kana" maxlength="10" pattern="[\u30A0-\u30FF]+" required>
            </div>
            
            <div>
                <label>カナ（名）</label>
                <input type="text" class="text" name="last_name_kana" maxlength="10" pattern="[\u30A0-\u30FF]+" required>
            </div>
            
            <div>
                <label>メールアドレス</label>
                <input type="text" class="text" name="mail" maxlength="100" pattern="[a-zA-Z0-9@-]+" required>
            </div>
            
            <div>
                <label>パスワード</label>
                <input type="text" class="text" name="password" maxlength="100" pattern="[A-Za-z0-9]+" required>
            </div>
            
            <div>
                <label>性別</label>
                <input type="radio" class="text" name="gender" value="0" checked>男
                <input type="radio" class="text" name="gender" value="1">女
            </div>
            
            <div>
                <label>郵便番号</label>
                <input type="text" class="text" name="postal_code" maxlength="7" pattern="\d{7}" required>
            </div>
            
            <div>
                <label>住所（都道府県）</label>
                <input type="" select class="dropdown" name="prefecture">
                    <option></option>
                    <script>
                    </script>
            </div>
            
            <div>
                <label>住所（市区町村）</label>
                <input type="text" class="text" name="address_1" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF\u30A0-\u30FF0-9\- ]+" required>
            </div>
            
            <div>
                <label>住所（番地）</label>
                <input type="text" class="text" name="address_2" maxlength="100" pattern="[\u3040-\u309F\u4E00-\u9FAF\u30A0-\u30FF0-9\- ]+" required>
            </div>
            
            <div>
                <label>アカウント権限</label>
                <input type="text" class="text" name="authority">
            </div>
            
            <div>
                <label>確認する</label>
                <input type="submit" class="text" name="submit">
            </div>
        
        
        </form>
    
    
    </body>
</html>
?>