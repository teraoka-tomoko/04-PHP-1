<?php
    // $number = [
    //     '19',
    //     '2',
    //     '87',
    //     '59',
    //     '61',
    //     '55',
    //     '33',
    //     '6',
    //     '29',
    //     '55'
    // ];
    // print_r($number);

    
    $array = array('19', '2', '87', '59', '61', '55', '33', '6', '29', '55');
    // $var1 = 19,2,87,59,61,55,33,6,29,55;
    // var_dump($var1); echo "\n";
    // var_dump($array); echo "\n";
    $intArray = array_map('intval', $array);
    var_dump($intArray); 
    echo "\n";



?>