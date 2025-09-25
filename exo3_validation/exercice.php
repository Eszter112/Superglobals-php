<!-- Créer un formulaire avec nom, email, age.
• Règles :
o nom non vide.
o email valide.
o age entier positif.
• Afficher erreurs sinon valeurs -->

<form method="post">

    Nom: <input type="text" name="nom">
    Email: <input type="email" name="email">
    Age : <input type="number" name="age">

    <button type="submit">Envoyer</button>

</form>

<?php





if ($_SERVER['REQUEST_METHOD'] === 'POST') { //'REQUEST_METHOD'  Méthode de requête utilisée pour accéder à la page ; par exemple GET, HEAD, POST, PUT.


    $nom = $_POST['nom'];

    $email = $_POST['email'];

    $age = $_POST['age'];


    if (empty($nom)) {
        echo "Erreur : nom vide";
    }



    if (empty($email)) {
        echo "Erreur : email vide ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //filter_var: permet de verifier (valider) ou de nettoyer des donnees 
        echo "Erreur : email invalide.";
    } else {
        echo "Email valide: " . htmlspecialchars($email);
    }



    if (empty($age)) {
        echo "Erreur : age vide ";
    } elseif ($age <= 0  && filter_var($age, FILTER_VALIDATE_INT)) { //
        echo "Entrez age entier positif";
    } else {
        echo "Age valide: " . htmlspecialchars($age);
    }
}
