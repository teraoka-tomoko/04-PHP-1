<?php
    date_default_timezone_set('Asia/Tokyo');
    // 現在日時
    echo date('Y年m月d日G時i分s秒');
    echo "\n";

    // 現在日時から３日後
    $date = new DateTime();
    $date->modify('+3 days');
    echo $date->format('Y年m月d日G時i分s秒');
    echo "\n";

    // 現在日時から12時間前
    $date = new DateTime();
    $date->modify('-12 hours');
    echo $date->format('Y年m月d日G時i分s秒');
    echo "\n";

    // 2020年元旦から現在までの経過日数
    $date1 = new DateTime('2020-01-01');
    $date2 = new DateTime();
    $interval = $date1->diff($date2);

    // days プロパティを出力
    echo $interval->days . '日';

?>