<?php

function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : Division par zéro";
            }
            return $a / $b;
        case '%':
            if ($b == 0) {
                return "Erreur : Modulo par zéro";
            }
            return $a % $b;
        default:
            return "Erreur : Opération non supportée";
    }
}

echo calcule(5,"-",6);