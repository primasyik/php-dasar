<?php

function tambahData(...$nilai){
    $total = 0;
    foreach($nilai as $n){
        $total += $n;
    }
    echo "Total " . implode(" + ", $nilai) . " = $total" . "<br>";
}

tambahData(1, 2, 3, 4);


for($i=1; $i < 5; $i++){
    for($j=1; $j<=5; $j++){
        if($j % 2 == 0){
            if($i % 2 == 1){
                echo $j . " " . $i . "<br>";
            }
        }
    }
}



?>