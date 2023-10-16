<?php
    
    function plus($number) {
        $total = $number+1;
        return $total;
    }
    
    $number = 8; // 任意の数値
    $total = plus($number);

    echo "$total";
    echo "\n";
?>