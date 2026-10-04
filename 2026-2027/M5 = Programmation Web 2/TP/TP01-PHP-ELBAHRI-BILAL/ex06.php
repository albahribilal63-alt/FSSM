<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables et types</title>
</head>
<body>
    <?php
        $produit = "Clavier";
        $quantite = 3;
        $prix = 120.50;
        $disponible = true;

        echo "Produit : $produit<br>";
        echo "Quantité : $quantite<br>";
        echo "Prix : $prix<br>";
        echo "Disponibilité : $disponible<br>";

        echo "<hr>";

        var_dump($produit);
        echo "<br>";
        var_dump($quantite);
        echo "<br>";
        var_dump($prix);
        echo "<br>";
        var_dump($disponible);
        echo "<br>";
    ?>
    <p>Lorsque l'on affiche directement une variable booléenne avec echo, la valeur true devient 1 et false devient vide. Pour voir le type exact, il faut utiliser var_dump().</p>
</body>
</html>
