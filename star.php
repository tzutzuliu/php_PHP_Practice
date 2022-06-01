<h1>畫星星</h1>
<?php
for($i=0;$i<=10;$i++){
    for($j=0;$j<=10;$j++){

        echo "*";
    }
}
?>

<h2>倒直角三角形</h2>
<?php
for($i=0;$i<5;$i++){

    for($j=5;$j>$i;$j--){

        echo  "*";
    }

    echo "<br>";
}

?>

<h3>歪的正三小角形</h3>
<?php
for($i=0;$i<10;$i++){

    for($j=0;$j<($i*2+1);$j++){

        echo "*";
    }
    echo "<br>";
}

?>
<h4>正三角形</h4>
<?php
for($i=0;$i<=5;$i++){

    for($k=1;$k<=(5-$i);$k++){
        echo "&nbsp";

    }
    for($j=1;$j<=(2*$i-1); $j++){
        echo "*";
    }
        echo "<br>";
}








?>









<h5>菱形</h5>
<?php





?>





