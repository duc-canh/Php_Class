<?php
    //tham chiếu
    //xây dựng hàm đầu vao flaf a và b
    function Traodoi(&$a,&$b){
        $tam = $a;
        $a = $b;
        $b = $tam;
    }
    function tinh_tong($a,$b){
        $tong =  $a + $b;
        echo $tong;
    }
   tinh_tong(5,10);
?>