<style>
    table{
        color:black;
        border:2px solid palevioletred;
        border-collapse: separate;
    }
    td{
        border:2px solid palevioletred;
        padding:7px
    }

</style>

<h1>九九乘法表</h1>
<?php
echo "<table>";
for($i=0;$i<10;$i++){
    echo "<tr>";
for($j=0;$j<=10;$j++){
    if($i==0){
        echo "<td style='background:lightgreen'>$j</td>";
    }else if($j==0){
        echo "<td class='background:lightgreen'>$i</td>";
    }else{
        echo "<td>";
        echo $i*$j;
        echo "</td>";
    }
}
echo "</tr>";
}
echo "</table>";
?>
