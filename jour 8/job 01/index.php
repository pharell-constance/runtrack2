<?php
session_start();


if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}


if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else {
    $_SESSION['nbvisites']++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites PHP</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites: <?php echo $_SESSION['nbvisites']; ?></p>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>