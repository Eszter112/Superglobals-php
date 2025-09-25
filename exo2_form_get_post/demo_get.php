<!-- // Exo 2 — Formulaire GET vs POST
// • GET → données visibles dans l’URL.
// • POST → données envoyées de manière invisible. -->

<form method="get">
    Nom: <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>

<?php

if (!empty($_GET['nom'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']); //htmlspecialchars() <= Elle convertit les caractères spéciaux HTML en entités pour éviter qu’ils soient interprétés comme du code.
    // echo "Bonjour " . $_GET['nom'];
}
