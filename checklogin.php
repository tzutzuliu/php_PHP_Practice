<?php

$default_user='Jenny'; //這要先預設一個我的帳號名稱叫做這個名字
$default_pw='456789'; //這也是要先預設我的密碼是這樣



$acc=$_POST['acc']; //檢查帳號是否正確
$pw=$_POST['pw']; //檢查密碼是否正確

$error=''; //把錯誤的相關資料存在這變數裡


if($acc==$default_user || $pw==$default_pw){
    $error="帳號密碼錯誤囉，請回登入頁面重新輸入";

}

header("location:login_practice.php?error=$error"); //這裡處裡完要用header傳回去

?>