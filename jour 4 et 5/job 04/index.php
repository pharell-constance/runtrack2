<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>Formulaire de connexion</h1>
    
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <input type="submit" value="Se connecter">
    </form>
    
    <hr>
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if ($username === "John" && $password === "Rambo") {
            echo "<p>C'est pas ma guerre</p>";
        } else {
            echo "<p>Votre pire cauchemar</p>";
        }
    }
    ?>
    

</body>
</html>