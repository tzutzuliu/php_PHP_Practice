<?php
//更新0605練習1"
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$skyland=[];

for($i=0;$i<count($sky);$i++){
    
    for($j=0;$j<count($land);$j++){
    
        $skyland[]=$sky[$i].$land[$j];

    }
    
}

/* echo "<pre>";
print_r($skyland);
echo "</pre>"; */

$skyland2=[];
$year=(2022-1024);

echo $sky[$year%10] . $land[$year%12];

for($i=1024;$i<=2048;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}

echo "<pre>";
print_r($skyland2);
echo "</pre>";

echo "西元2022年是 [".$skyland2[2022]."] 年";
?>