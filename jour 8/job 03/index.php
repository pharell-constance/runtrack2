<?php
// Fonction gras : met en gras les mots commençant par une majuscule
function gras($str) {
    return preg_replace('/\b([A-Z][a-zA-Z]*)\b/', '<b>$1</b>', $str);
}

// Fonction cesar : décale chaque caractère de $decalage positions
function cesar($str, $decalage = 2) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            if ($ascii >= 65 && $ascii <= 90) { // Majuscules A-Z
                $newChar = chr(((($ascii - 65) + $decalage) % 26) + 65);
            } else if ($ascii >= 97 && $ascii <= 122) { // Minuscules a-z
                $newChar = chr(((($ascii - 97) + $decalage) % 26) + 97);
            } else {
                $newChar = $char;
            }
            $result .= $newChar;
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Fonction plateforme : ajoute "_" aux mots finissant par "me"
function plateforme($str) {
    return preg_replace('/\b(\w*me)\b/', '$1_', $str);
}

// Traitement du formulaire
$resultat = '';
if ($_POST) {
    $str = $_POST['str'] ?? '';
    $fonction = $_POST['fonction'] ?? '';
    
    switch ($fonction) {
        case 'gras':
            $resultat = gras($str);
            break;
        case 'cesar':
            $resultat = cesar($str);
            break;
        case 'plateforme':
            $resultat = plateforme($str);
            break;
        default:
            $resultat = 'Fonction non reconnue';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformations de Texte</title>
</head>
<body>
    <h1>Formulaire de Transformations de Texte</h1>
    
    <form method="POST" action="">
        <p>
            <label for="str">Texte à transformer :</label>
            <input type="text" name="str" id="str" value="<?= htmlspecialchars($_POST['str'] ?? '') ?>" required>
        </p>
        
        <p>
            <label for="fonction">Fonction à appliquer :</label>
            <select name="fonction" id="fonction" required>
                <option value="">-- Choisir une fonction --</option>
                <option value="gras" <?= ($_POST['fonction'] ?? '') == 'gras' ? 'selected' : '' ?>>
                    Gras (mots avec majuscule)
                </option>
                <option value="cesar" <?= ($_POST['fonction'] ?? '') == 'cesar' ? 'selected' : '' ?>>
                    César (décalage +2)
                </option>
                <option value="plateforme" <?= ($_POST['fonction'] ?? '') == 'plateforme' ? 'selected' : '' ?>>
                    Plateforme (ajouter _ aux mots en "me")
                </option>
            </select>
        </p>
        
        <p>
            <button type="submit">Transformer</button>
        </p>
    </form>
    
    <?php if ($resultat): ?>
        <hr>
        <h2>Résultat :</h2>
        <p><strong>Texte original :</strong> <?= htmlspecialchars($_POST['str']) ?></p>
        <p><strong>Fonction appliquée :</strong> <?= htmlspecialchars($_POST['fonction']) ?></p>
        <p><strong>Résultat :</strong> <?= $resultat ?></p>
    <?php endif; ?>
</body>
</html>