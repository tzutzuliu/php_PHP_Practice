
<h1>給定兩個日期，計算中間間隔天數</h1>
<?php
$day1="2022-4-10";
$day2="2022-4-20";
echo "日期一=>".$day1."<br>";
echo "日期二=>".$day2."<br>";

$time1=strtotime($day1);
$time2=strtotime($day2);

echo $time1;
echo "<br>";
echo $time2;
$gap=($time2-$time1-(24*60*60));
$gap=$gap/(60*60*24);


$duration=($time2-$time1+(24*60*60));
$duration=$duration/(60*60*24);

$diff=($time2-$time1);
$diff=$diff/(60*60*24);
echo "<hr>";
echo "中間間隔 ".$gap." 天<br>";
echo "經過了 ".$duration." 天<br>";
echo "相差了 ".$diff." 天<br>";


?>