<!-- Formulaire POST : nom, email, password.
o Validation : champs non vides, email valide, mot de passe ≥ 8.
o session_start(); → stocker nom et email en session.
o Créer/mettre à jour un cookie last_visit.
o Si validation OK → rediriger vers profil.php. Sinon → afficher erreurs. -->


<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <form method="POST">

        Nom : <input type="text" name="nom">
        Email : <input type="email" name="email">
        Password : <input type="password" name="password">

        <button type="submit">Valider</button>

    </form>

    <?php





    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        $nom = $_POST['nom'];

        $email = $_POST['email'];

        $password = $_POST['password'];




        if (empty($nom)) {
            echo "Erreur : nom vide " . "<br>";
        } else {
            $_SESSION["nom"] = $nom;
        }



        if (empty($email)) {
            echo "Erreur : email vide " . "<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Erreur : email invalide." . "<br>";
        } else {
            $_SESSION["email"] = $email;
        }



        if (strlen($password) <= 8) {
            echo " Le mot de passe doit contenir au moins 8 caractères ";
        }


        if (!empty($nom) && !empty($email) && !empty($password)) {
            setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
            header("Location: profil.php");
            exit;
        }
    }


    ?>


</body>

</html>