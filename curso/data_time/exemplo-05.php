<?php

$dt = new DateTime();
//adicionando 15 dias a data de hoje
$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");