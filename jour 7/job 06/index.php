<?php 

function leetSpeak($str) {
    if ($str == "A" || $str == "a") {
        return "4";
    } else if ($str == "B" || $str == "b") {
        return "8";
    } else if ($str == "E" || $str == "e") {
        return "3";
    } else if ($str == "G" || $str == "g") {
        return "6";
    } else if ($str == "L" || $str == "l") {
        return "1";
    } else if ($str == "I" || $str == "i") {
        return "1";
    } else if ($str == "O" || $str == "o") {
        return "0";
    } else if ($str == "S" || $str == "s") {
        return "5";
    } else if ($str == "T" || $str == "t") {
        return "7";
    } else {
        return $str;
    }
}

echo leetSpeak("E");