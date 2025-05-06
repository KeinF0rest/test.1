<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=account;host=localhost;","root","");
$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pdo ->exec("insert into account(family_name, last_name, family_name_kana, last_name_kana, mail, password, gender, postal_code, prefecture, address_1, address_2, authority) values('".$_POST['family_name']."', '".$_POST['last_name']."', '".$_POST['family_name_kana']."', '".$_POST['last_name_kana']."', '".$_POST['mail']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['postal_code']."', '".$_POST['prefecture']."', '".$_POST['address_1']."', '".$_POST['address_2']."', '".$_POST['authority']."');");
?>

<!DOCTYPE html>
<html lang ="ja">
    <head>
        <meta charset ="utf-8">
        <title>アカウント登録完了画面</title>
    </head>
    <body>
        <h2>アカウント登録完了画面</h2>
        <div class ="">
            <p>登録完了しました</p>
        </div>
        <form action="index.html">
            <input type="submit" value="TOPページへ戻る">
        </form>
    </body>
</html>