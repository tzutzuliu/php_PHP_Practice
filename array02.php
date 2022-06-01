<h2>陣列反轉</h2>

<?php
$a=[2,4,6,1,8];

for($i=0;$i<count($a);$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
}

?>
