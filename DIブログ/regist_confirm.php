<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
    </head>
    <body>
        <h1>アカウント登録確認画面</h1>
        <div class="">
            <p>名前（姓）　<?php echo $_POST['family_name']; ?>
            </p>
            
            <p>名前（名） <?php echo $_POST['last_name']; ?></p>
            
            <p>カナ（姓） <?php echo $_POST['family_name_kana']; ?></p>
            
            <p>カナ（名） <?php echo $_POST['last_name_kana']; ?></p>
            
            <p>メールアドレス <?php echo $_POST['mail']; ?></p>
            
            <p>パスワード <?php echo password_hash($_POST['password'], PASSWORD_DEFAULT); ?></p>
            
            <p>性別 <?php echo $_POST['gender']; ?></p>
            
            <p>郵便番号 <?php echo $_POST['postal_code']; ?></p>
            
            <p>住所（都道府県） <?php echo $_POST['prefecture']; ?></p>
            
            <p>住所（市区町村） <?php echo $_POST['address_1']; ?></p>
            
            <p>住所（番地） <?php echo $_POST['address_2']; ?></p>
            
            <p>アカウント権限 <?php echo $_POST['authority']; ?></p>
            
            <form method="post" action="regist.php">
                <?php foreach ($_POST as $key => $value): ?>
                    <input type="hidden" name="<?php echo $key; ?>" value="<?php echo ($value); ?>">
                <?php endforeach; ?>
                <input type ="submit" class ="" value ="前に戻る">
            </form>
            
            <form method="post" action="regist_complete.php">
                <input type ="submit" class ="" value ="登録する">
                <input type ="hidden" value ="<?php echo $_POST['family_name']; ?>" name ="family_name">
                <input type ="hidden" value ="<?php echo $_POST['last_name']; ?>" name ="last_name">
                <input type ="hidden" value ="<?php echo $_POST['family_name_kana']; ?>" name ="family_name_kana">
                <input type ="hidden" value ="<?php echo $_POST['last_name_kana']; ?>" name ="last_name_kana">
                <input type ="hidden" value ="<?php echo $_POST['mail']; ?>" name ="mail">
                <input type ="hidden" value ="<?php echo $_POST['password']; ?>" name ="password">
                <input type ="hidden" value ="<?php echo $_POST['gender']; ?>" name ="gender">
                <input type ="hidden" value ="<?php echo $_POST['postal_code']; ?>" name ="postal_code">
                <input type ="hidden" value ="<?php echo $_POST['prefecture']; ?>" name ="prefecture">
                <input type ="hidden" value ="<?php echo $_POST['address_1']; ?>" name ="address_1">
                <input type ="hidden" value ="<?php echo $_POST['address_2']; ?>" name ="address_2">
                <input type ="hidden" value ="<?php echo $_POST['authority']; ?>" name ="authority">
            </form>
        
        
        </div>
    
    
    </body>


</html>