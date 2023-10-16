<?php

// リンゴ値段
$apple_val=100;
// リンゴ個数
$apple_qua=1;

// ブドウ値段
$grape_val=200;
// ブドウ個数
$grape_qua=3;

// リンゴ１個（apple_qua)×リンゴ値段100円(apple_val)＋ブドウ3個（grape_qua)×ブドウ値段200円(grape_val)
$apple =$apple_qua*$apple_val;
$grape =$grape_qua*$grape_val;
$sum =$apple+$grape;

echo "$apple_val 個のリンゴを $apple_qua 個。";
echo "$grape_val 個のリンゴを $grape_qua 個。";


echo "合計は $sum です。";

?>