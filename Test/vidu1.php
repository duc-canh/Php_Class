<?php
    // for($i = 0; $i < 20; $i ++) {
    //     for($j = (20 - $i); $j < 20; $j ++) {
    //         echo "*";
    //     }
    //     echo "<br>";
    // }
    // for($i = 0 ;$i<5;$i++){
    //     for($j = 0;$j<10;$j++){
    //         echo "*";
    //     }
    //     echo "<br>";
    // }
    // for($i = 1;$i<100;$i++){
    //     if($i % 3 == 0 && $i % 5 == 0){
    //         echo 'FizzBuzz : '.$i.'<br>';
    //     }else
    //     if($i % 3 == 0){
    //         echo 'Fizz : '.$i.'<br>';
    //     }else
    //     if($i % 5 == 0){
    //         echo 'Buzz :  '.$i.'<br>';
    //     }
    // }
    
    for($i = 1;$i < 11;$i++){
        for($j = 1 ; $j < 11 ; $j++){
            $tich = $i * $j;
            echo $i . ' * '.$j.' = '.$tich.'<br>';
        }
    }
?>