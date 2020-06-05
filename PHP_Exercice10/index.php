<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 5 Exercice 10</title>
</head>
<body>
    <?php
        //Aisne (02) Nord (59) Oise (60) Pas-de-Calais (62) Somme (80)
        
        function ShowDept ($n){
            $HautsDeFr = [
                '02' => 'Aisne',
                '59' => 'Nord',
                '60' => 'Oise',
                '62' => 'Pas-de-Calais',
                '80' => 'Somme'];
                
            return 'Le département ' . $HautsDeFr[$n] . ' a le numéro ' . $n;
        }
    ?>
    <p><?php print(ShowDept('02')); ?></p>
    <p><?php print(ShowDept('59')); ?></p>
    <p><?php print(ShowDept('60')); ?></p>
    <p><?php print(ShowDept('62')); ?></p>
    <p><?php print(ShowDept('80')); ?></p>
</body>
</html>