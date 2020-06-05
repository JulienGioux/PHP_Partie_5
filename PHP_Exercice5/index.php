<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 5 Exercice 5</title>
</head>
<body>
    <?php
        //Aisne (02) Nord (59) Oise (60) Pas-de-Calais (62) Somme (80)
        $HautsDeFr = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme'];
    ?>
    <p><?php print($HautsDeFr['02']); ?></p>
    <p><?php print($HautsDeFr['59']); ?></p>
    <p><?php print($HautsDeFr['60']); ?></p>
    <p><?php print($HautsDeFr['62']); ?></p>
    <p><?php print($HautsDeFr['80']); ?></p>
</body>
</html>