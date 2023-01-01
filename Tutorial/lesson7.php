<?php
header('Content-type: text/html; charset=utf-8');
use NCL\NCL;
use NCL\NCLNameCaseRu;
$nc = new NCLNameCaseRu();

$name = "Ефиопский Аркадий Василевич";

/**
 * Склоняем слово любыми методами
 */
$nc->q($name);

/**
 * Получаем массив объектов типа NCLNameCaseWord
 */
$words = $nc->getWordsArray();


foreach ($words as $word)
{
    /**
     * Выводим тип каждого слова на экран
     */
    echo $word->getNamePart().' '.$word->getNameCase(NCL::$TVORITELN)."\n";
}

/**
 * Получаем:
 * S Ефиопским
 * N Аркадием
 * F Василевичем
 */
?>
