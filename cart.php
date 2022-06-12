<h1>購物車練習</h1>

<?php
setcookie('化妝品',"MAC",time()+3600);
setcookie('化妝品',"lancome",time()+3600);
setcookie('化妝品',"SK",time()+3600);
setcookie('化妝品',"KIEHLS",time()+3600);

setcookie('化妝品',serialize(['MAC=>2000','lancome'=>4000,'SK'=>50000,'KIEHLS'=>6000]),time()+3600);

$cart=unserialize($_COOKIE['化妝品']);
foreach($cart as $produce=> $qt ){
    echo $produce."->".$qt."<br>";
}


?>

