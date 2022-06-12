<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>session練習</h1>
    <?php

    session_start();
    $_SESSION['Cart']["化妝品"]=10000;
    $_SESSION['Cart']["MAC"]=10000;
    $_SESSION['Cart']["LANCOME"]=10000;

    foreach($_SESSION['Cart'] as $prod=> $qt ) //用foreach取出來,prod是key值
    {
        echo $prod. "->" . $qt ."<br>";
    }
    
    ?>
    
</body>
</html>