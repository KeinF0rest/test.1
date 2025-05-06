<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
    </head>
    <body>
        <h1>アカウント登録画面</h1>
        <form id="registerForm" method="post" action="regist_confirm.php">
            <div>
                <label>名前（姓）</label>
                <input type="text" class="text" name="family_name" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF]+" required>
                <span class="error" id="error_family_name"></span>
            </div>
            <br>
            
            <div>
                <label>名前（名）</label>
                <input type="text" class="text" name="last_name" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF]+" required>
                <span class="error" id="error_last_name"></span>
            </div>
            <br>
            
            <div>
                <label>カナ（姓）</label>
                <input type="text" class="text" name="family_name_kana" maxlength="10" pattern="[\u30A0-\u30FF]+" required>
                <span class="error" id="error_family_name_kana"></span>
            </div>
            <br>
            
            <div>
                <label>カナ（名）</label>
                <input type="text" class="text" name="last_name_kana" maxlength="10" pattern="[\u30A0-\u30FF]+" required>
                <span class="error" id="error_last_name_kana"></span>
            </div>
            <br>
            
            <div>
                <label>メールアドレス</label>
                <input type="text" class="text" name="mail" maxlength="100" pattern="[a-zA-Z0-9@-]+" required>
                <span class="error" id="error_mail"></span>
            </div>
            <br>
            
            <div>
                <label>パスワード</label>
                <input type="text" class="text" name="password" maxlength="100" pattern="[A-Za-z0-9]+" required>
                <span class="error" id="error_password"></span>
            </div>
            <br>
            
            <div>
                <label>性別</label>
                <input type="radio" class="text" name="gender" value="0" checked>男
                <input type="radio" class="text" name="gender" value="1">女
                <span class="error" id="error_gender"></span>
            </div>
            <br>
            
            <div>
                <label>郵便番号</label>
                <input type="text" class="text" name="postal_code" maxlength="7" pattern="\d{7}" required>
                <span class="error" id="error_postal_code"></span>
            </div>
            <br>
            
            <div>
                <label>住所（都道府県）</label>
                <select name="prefecture" required>
                    <option value="" selected>選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                </select>
                <span class="error" id="error_prefecture"></span>
            </div>
            <br>
            
            <div>
                <label>住所（市区町村）</label>
                <input type="text" class="text" name="address_1" maxlength="10" pattern="[\u3040-\u309F\u4E00-\u9FAF\u30A0-\u30FF0-9\- ]+" required>
                <span class="error" id="error_address_1"></span>
            </div>
            <br>
            
            <div>
                <label>住所（番地）</label>
                <input type="text" class="text" name="address_2" maxlength="100" pattern="[\u3040-\u309F\u4E00-\u9FAF\u30A0-\u30FF0-9\- ]+" required>
                <span class="error" id="error_address_2"></span>
            </div>
            <br>
            
            <div>
                <label>アカウント権限</label>
                <select name="authority" required>
                    <option value="0" selected>一般</option>
                    <option value="1">管理者</option>
                </select>
            </div>
            <br>
            
            <div>
                <label>確認する</label>
                <input type="submit" class="text" name="submit">
            </div>
            <br>
        </form> 
        
        <script>
            document.getElementById("registerForm").addEventListener("submit", function(event) {
                let errors = [];

                function validateField(fieldName, errorId, errorMessage) {
                    let fieldValue = document.forms["registerForm"][fieldName].value;
                    if (fieldValue === "") {
                        document.getElementById(errorId).innerHTML = `<span style='color: red;'>${errorMessage}</span>`;
                        errors.push(fieldName);
                    } else {
                        document.getElementById(errorId).innerHTML = "";
                    }
                }

                validateField("family_name", "error_family_name", "名前（姓）が未入力です。");
                validateField("last_name", "error_last_name", "名前（名）が未入力です。");
                validateField("family_name_kana", "error_family_name_kana", "カナ（姓）が未入力です。");
                validateField("last_name_kana", "error_last_name_kana", "カナ（名）が未入力です。");
                validateField("mail", "error_mail", "メールアドレスが未入力です。");
                validateField("password", "error_password", "パスワードが未入力です。");
                validateField("postal_code", "error_postal_code", "郵便番号が未入力です。");
                validateField("prefecture", "error_prefecture", "都道府県を選択してください。");
                validateField("address_1", "error_address_1", "住所（市区町村）が未入力です。");
                validateField("address_2", "error_address_2", "住所（番地）が未入力です。");

                if (errors.length > 0) {
                    event.preventDefault();
                }
            });
</script>

    </body>
</html>