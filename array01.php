<h2>天干地支</h2>

<pre>
天干：甲乙丙丁戊己庚辛壬癸
地支：子丑寅卯辰巳午未申酉戌亥
天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….
</pre>


<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','卯','辰','巳','午','未','申','酉','戌','亥'];

$skyland=[];

for($i=0;$i<count($sky);$i++){

    for($j=0;$j<count($land);$j++){

        $skyland=[]$sky[$i].$land[$j];
    }
}
echo "<pre>";
print_r($skyland);
echo "</pre>";
 
$skyland2=[];
$year=(2022-1024);

echo $sky[$year%10] . $land[$year%12];


?>
