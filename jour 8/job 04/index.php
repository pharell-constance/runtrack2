<?php

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}


if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, time() + 3600 * 24 * 30, '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}


$isConnected = isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php if ($isConnected): ?>
        <p>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>