<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur d'arguments GET</title>

</head>
<body>
    <div class="container">
        <h1> Compteur d'arguments GET</h1>
        

        <h2> Formulaire de test</h2>
        <form method="GET" action="">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
            </div>
            
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
            </div>
            
            <div class="form-group">
                <label for="age">Âge :</label>
                <input type="text" id="age" name="age" placeholder="Entrez votre âge">
            </div>
            
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" placeholder="Entrez votre ville">
            </div>
            
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" id="email" name="email" placeholder="Entrez votre email">
            </div>
            
            <input type="submit" value="🚀 Envoyer le formulaire">
        </form>

        <?php

        function compterArgumentsGET() {

            $argumentsNonVides = 0;
            foreach ($_GET as $valeur) {
                if (!empty(trim($valeur))) {
                    $argumentsNonVides++;
                }
            }
            return $argumentsNonVides;
        }

$nombreNonVides = compterArgumentsGET();

        if (isset($_GET) && count($_GET) > 0) {

            
            echo '<div class="result">';
            echo '<h3> Résultat</h3>';
            echo '<p><strong>Le nombre d\'arguments GET non vides est : ' . $nombreNonVides . '</strong></p>';

            
            
        }
        ?>
</body>
</html>