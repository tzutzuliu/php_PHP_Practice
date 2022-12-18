<h2>菱形練習</h2>
<?php
    for($i=0;$i<9;$i++){

        //印空白
        if($i<=4){

            for($k=5;$k>$i;$k--){
                echo "&nbsp;";
            }

            for($j=0;$j<($i*2+1);$j++){
                echo "*";
            }

        }else{

            for($k=0;$k<($i-5);$k++){
                echo "&nbsp;";
            }

        }

    }

    for($i=0;$i<$size;$i++){

        if($i<=(($size-1))/2){
            for($k=0;$k<(($size-1)/2-$i);$k++){
                echo "&nbsp;";
            }

            for($j=0;$j<($i*2+1);$j++){
                echo "*";
            }

        }else{
            for($k=0;$k<($i-($size-1)/2);$k++){
                echo "&nbsp;";
            }

            for($j=0;$j<(($size-1-$i)*2+1);$j++){
                echo "*";
            }

        }

    }


?>