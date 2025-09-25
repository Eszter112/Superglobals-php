<!-- Exo 3 — Validation de formulaire
• Ne jamais faire confiance aux données saisies.
• Utiliser htmlspecialchars(), filter_var(). -->


<form method="post">
    Email <input type="text" name="email">
    <button type="submit">OK</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //'REQUEST_METHOD'  Méthode de requête utilisée pour accéder à la page ; par exemple GET, HEAD, POST, PUT.
    $email = ($_POST['email']);
    if (empty($email)) {
        echo "Erreur : email vide ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //filter_var: permet de verifier (valider) ou de nettoyer des donnees 
        echo "Erreur : email invalide.";
    } else {
        echo "Email valide: " . htmlspecialchars($email);
    }
}
