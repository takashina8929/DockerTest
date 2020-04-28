<?php
// エラーメッセージの初期化
$emptyId = "";
$emptyPass = "";
$errorMessage = "";

// できない
// ログインボタンが押された場合
// if (isset($_POST["login"])) {
//     // 1. ユーザIDの入力チェック
//     if (empty($_POST["id"])) { 
//         $emptyId = 'IDが未入力です。';
//     }
//     if (empty($_POST["password"])) {
//         $emptyPass = 'パスワードが未入力です。';
//     }

//     header("Location: success.php");
//     exit();
// }

// セッション開始
session_start();


if (isset($_POST["login"])) {
    $id = $_GET["id"];
    $pass = $_GET["password"];
    
    echo $id;
    echo $pass;

    header("Location: ./success.php");
}
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>demo</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <h1 class="headline">
            <a>DEMO</a>
        </h1>
    </header>

    <form method="POST" action="">
        <div>
        <p class="label">ID
        <br>
        <input type="text" name="id" id="id" class="input"></p>
        <p class="label">PASS
        <br>
        <input type="password" name="password" class="input"></p>
    </div>
        <p><input type="submit" value="LOGIN" name="login" id="login" class="button"></p>
    </form>
</body>
</head>

</html>