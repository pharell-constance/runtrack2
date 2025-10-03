<?php
// index.php
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec styles</title>
    <link rel="stylesheet" href="<?php echo $selectedStyle; ?>.css">
</head>
<body>
    <div class="container">
        <h1>Sélectionnez votre style</h1>
        
        <form method="POST" action="">
            <label for="style">Style :</label>
            <select name="style" id="style">
                <option value="style1" <?php echo ($selectedStyle == 'style1') ? 'selected' : ''; ?>>Style 1</option>
                <option value="style2" <?php echo ($selectedStyle == 'style2') ? 'selected' : ''; ?>>Style 2</option>
                <option value="style3" <?php echo ($selectedStyle == 'style3') ? 'selected' : ''; ?>>Style 3</option>
            </select>
            
            <button type="submit">Valider</button>
        </form>
        
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <p class="message">Style <?php echo htmlspecialchars($selectedStyle); ?> appliqué !</p>
        <?php endif; ?>
    </div>
</body>
</html>