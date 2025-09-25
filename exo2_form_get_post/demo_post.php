<!-- // Exo 2 — Formulaire GET vs POST
// • GET → données visibles dans l’URL.
// • POST → données envoyées de manière invisible. -->

<form method="post">
    Email : <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>

<?php

if (!empty($_POSTE['email'])) {
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}
