<?php

$notas = array(7.5, 8.5, 9.5, 10);

$total = array_sum($notas);

$variavelTeste = "Teste";

$media = $total / count($notas);

echo "A média é: $media";