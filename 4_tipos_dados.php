<?php

$idade = 21;
echo gettype($idade). "\n";

$salario = 1000.30;
echo gettype($salario). "\n";

$divisao = 10/3;
echo gettype($divisao). "\n";

# int $idade = 21;
# float $salario = 1000.3;
# float $divisao = 10 / 3;
# Não precisamos fazer esse tipo de tipagem pois o PHP já faz isso automaticamente.

$texto = "Olá mundo!";
echo gettype($texto). "\n";

$verdadeiro = true;
$falso = false;
echo gettype($verdadeiro). "\n";
echo gettype($falso). "\n";
