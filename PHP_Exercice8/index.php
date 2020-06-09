<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 5 Exercice 8</title>
</head>
<body>
    <?php
        $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $listMonths = '';
        foreach ($months as $key => $value) {
            $listMonths = $listMonths . '<br>' . '[' . $key . '] ' . $value;
        }
    ?>
    <p><?= $listMonths ?></p>

</body>
</html>