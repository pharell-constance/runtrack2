<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    for ($i=0;  $i<1338; $i++ ){
        if ($i == 42){
            echo "<br><u>" . $i . "</u><br>";
        } else {
            echo "<br>". $i . "<br>";
        }
    };
?>
</body>
</html>