<?php
    function funcWeek(){
        return array('日', '月', '火', '水', '木', '金', '土');
    }
    $w = funcWeek()[date("w")];
    echo date('Y年m月d日('.$w.'曜日)');
?>