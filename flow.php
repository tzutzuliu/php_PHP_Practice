<h1>流程結構</h1>
<h2>if...else</h2>
<?php
$price=100;
echo "價格=".$price;
echo "<br>";

if($price>=100){
    echo "好貴";
}else{
    echo "便宜";
}
if($price>=100){

    echo "好貴，買不起";

}else{
   
    echo "便宜，買得起";
}

if($price>=100){

    echo "好貴，買不起";

}else if($price>=60){

    echo "還行，負擔得起";

}else{

    echo "便宜，買得起";
}

?>
<h3>switch...case</h3>
<?php
$score=500;
$level=($score>100 || $score<0)? 5: floor($score/25);
echo $level;

$level="B";
switch($level){
    case "A":
        echo "表現優良請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
}
?>
<h4>閏年的判斷</h4>
<?php
$year=200;
echo '年=>'.$year."<br>";

if($year%4 !=0){
    echo "這是平年";
}else if($year%100 !=0){
    echo "這是閏年";
}else if($year%400 !=0){
    echo"這是平年";
}else{
    echo "這是閏年";
}    
?>


