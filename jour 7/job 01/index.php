<?php

function hello(){
    echo "Hello LaPlateforme!";
};

hello();

function bonjour($jour){
    if ($jour = true){
        echo "bonjour";
    }else{
        echo "bonsoir";
    }
};

$jour = false;

bonjour($jour);

