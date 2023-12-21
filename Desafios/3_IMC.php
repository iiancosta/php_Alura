<?php

$altura = 1.65;
$peso = 65;
$imc = $peso/($altura**2);

# abaixo, dentro ou acima do nível recomendado

if ($imc < 18.5) {
    echo "Você está abaixo do peso.";
} elseif ($imc < 25){
    echo "Você está no peso ideal.";
} else {
    echo "Você está acima do peso.";
}





