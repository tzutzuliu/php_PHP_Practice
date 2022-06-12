<?php

$default_user='Jenny'; //這要先預設一個我的帳號名稱叫做這個名字
$default_pw='456789'; //這也是要先預設我的密碼是這樣



$acc=$_POST['acc']; //檢查帳號是否正確
$pw=$_POST['pw']; //檢查密碼是否正確



if($acc==$default_user && $pw==$default_pw){
    echo "帳號密碼正確喔!";
    echo "歡迎光臨!";
}else{
    echo "帳號密碼錯誤囉，請回登入頁面重新輸入";
    echo "<a href='login.php'>回登入頁面</a>";
}


?>