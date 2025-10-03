<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des paramètres GET</title>
</head>
<body>
    <h1>Formulaire de test GET</h1>
    
    <form method="GET" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <br><br>
        
        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <br><br>
        
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville">
        <br><br>
        
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age">
        <br><br>
        
        <input type="submit" value="Envoyer les données">
    </form>
    
    <hr>
    
    <h2>Paramètres GET reçus</h2>
    