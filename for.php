<h1>使用for迴圈來產生以下的數列</h1>
<h2><1,3,5,7,9...n</h2>
<hr>
<?php
$n=100;
for($i=1;$i<$n;$i=$i+2){

   echo $i; 
}
?>

<h2>10,20,30,40,50,60</h2>
<hr>
<?php
$n=100;
for($i=1;$i<$n;$i++){

    echo $i*10 . ",";
}
?>

<h2>1~100的質數3,5,7,11,13,17..97</h2>
<hr>
<?php

$n=100;
$sqrt=ceil(sqrt($n));
$test=false;
for($i=2;$i<=$sqrt;$i++){
    if($n%$i==0){
        echo $n .'不是一個質數';
        break;
    }
}


$n=1000;
for($j=3;$j<$n;$j++){
    $test=true;
    $sqrt=ceil(sqrt($j));

    for($i=2;$i<=$sqrt;$i++){
        if($j%$i==0){
            $test=false;
            break;
        }
    }

    if($test==true){
        echo$j.',';
    }
}
?>

