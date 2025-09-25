<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites: <span id="nbvisites">1</span></p>
    <button onclick="reset()">Reset</button>

    <script>

        let nbvisites = 1;
        

        function afficherCompteur() {
            document.getElementById('nbvisites').textContent = nbvisites;
        }
        

        function reset() {
            nbvisites = 0;
            afficherCompteur();
        }
        

        function nouvelleVisite() {
            nbvisites++;
            afficherCompteur();
        }
        

        afficherCompteur();
    </script>
</body>
</html>