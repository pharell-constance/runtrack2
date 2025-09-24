<?php 

function leetSpeak($str){
    if ($str == "A"||"a"){
        return 4;
}   else if ($str == "B"||"b"){
        return 8;
}   else if ($str == "E"||"e"){
        return 3;
}   else if($str == "G"||"g"){
        return 6;
}};

echo leetSpeak("a");