<?php


/*$sum=sum(22,10);
echo $sum*0.85;*/

//在沒有return的時候會這樣寫
/*function sum($num1,$num2){
    echo $num1+$num2;
}*/


//導到哪個頁面去
//to('index.php');
//to('test.php');


function dd($array){
    echo "<pre>";
    print_r($array);
    echo"</pre>";
}

function to ($url='index.php'){
    header('location:'.$url);
}



/*function sum($num1,$num2){
   return $num1+$num2;
}*/


?>