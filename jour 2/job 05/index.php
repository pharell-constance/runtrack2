<?php
function estPremier($nombre) {

    if ($nombre <= 1) {
        return false;
    }

    if ($nombre == 2) {
        return true;
    }
    

    if ($nombre % 2 == 0) {
        return false;
    }
    

    for ($i = 3; $i <= sqrt($nombre); $i += 2) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    
    return true;
}


for ($nombre = 2; $nombre <= 1000; $nombre++) {
    if (estPremier($nombre)) {
        echo $nombre . "<br />";
    }
}
?>