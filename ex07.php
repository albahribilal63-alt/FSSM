<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul</title>
</head>
<body>
    <?php
        $prixUnitaire = 15;
        $quantite = 4;
        $total = $prixUnitaire * $quantite;

        echo "$quantite cahiers à $prixUnitaire DH : total = $total DH<br>";

        $quantite = 7;
        $total = $prixUnitaire * $quantite;

        echo "$quantite cahiers à $prixUnitaire DH : total = $total DH";
    ?>
</body>
</html>
