<?php
use NCL\NCL;
use NCL\NCLNameCaseRu;

header('Content-type: text/html; charset=utf-8');

$nc = new NCLNameCaseRu();

echo $nc->q("АНДРЕЙ НИКОЛАЕВИЧ", NCL::$RODITLN)."\n";
echo $nc->q("королёв Никита ПЕТРОВИЧ", NCL::$RODITLN)."\n";
echo $nc->q("ПороСЁнОК ПёТР", NCL::$RODITLN)."\n";
