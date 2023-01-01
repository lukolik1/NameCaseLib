<?php
use NCL\NCL;
use NCL\NCLNameCaseRu;

header('Content-type: text/html; charset=utf-8');

$nc = new NCLNameCaseRu();

/**
 * Указываем падеж русской константой
 */
echo $nc->q('Андрей Николаевич', NCL::$RODITLN)."\n";

/**
 * Указываем падеж украинской константой
 */
echo $nc->q('Андрей Николаевич', NCL::$UaRodovyi)."\n";

/**
 * Явно не указываем пол
 */
print_r($nc->q('Иващук'));

/**
 * Указываем мужской пол
 */
print_r($nc->q('Иващук', null, NCL::$MAN));        

