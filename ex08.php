<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <h1>Fiche étudiant</h1>
    <?php
        $nom = "Ali";
        $prenom = "Youssef";
        $filiere = "Informatique";
        $annee = 2026;
        $age = 20;

        echo "<ul>
                <li>Nom : $nom</li>
                <li>Prénom : $prenom</li>
                <li>Filière : $filiere</li>
                <li>Année : $annee</li>
              </ul>";

        echo "Je m'appelle $prenom $nom, j'ai $age ans et je suis étudiant en $filiere.";
    ?>
</body>
</html>
