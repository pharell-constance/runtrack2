<?php 

if (isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = 0;
}

$countvisit = 1;

        if(isset($_COOKIE['countvisit']))
        {
            $countvisit = $_COOKIE['countvisit'];
            $countvisit ++; 
        }
setcookie('countvisit', $countvisit);
echo $countvisit;

?>

