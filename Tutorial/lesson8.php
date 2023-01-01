<?php
header('Content-type: text/html; charset=utf-8');
use NCL\NCL;
use NCL\NCLNameCaseRu;
$nc = new NCLNameCaseRu();

$money = "27452,80";

echo $nc->money2str($money);

/**
 * Получаем:
 * двадцать семь тысяч четыреста пятьдесят два рубля восемьдесят копеек
 */
?>
