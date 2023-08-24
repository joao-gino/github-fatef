<?php

$notas = array(7.5, 8.5, 9.5, 10);

$total = 0;

foreach($notas as $nota) {
    $total += $nota;
}

$media = $total / count($notas);

echo "A média é: $media";