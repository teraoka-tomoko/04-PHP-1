<?php
    $score = array(10 ,60 ,90 ,70 ,50);

    foreach($score as $value){
    if ($value >= 80) {
        echo $value ."点は「優」です。\n";
    } elseif ($value >= 60) {
        echo $value ."点は「良」です。\n";
    } elseif ($value >= 40) {
        echo $value ."点は「可」です。\n";
    } else {
        echo $value ."点は「不可」です。\n";
    }
}

?>