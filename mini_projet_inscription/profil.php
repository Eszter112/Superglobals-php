<!-- Afficher nom et email depuis $_SESSION.
o Afficher last_visit depuis $_COOKIE.
o Bouton « Déconnexion » qui détruit la session et redirige vers index.php. -->
<?php
session_start();

// if (!isset($_SESSION["nom"]) && !isset($_SESSION["email"])) {
//     echo "Votre nom est : " . htmlspecialchars($_SESSION["nom"]) . " Votre email est : " . htmlspecialchars($_SESSION["email"]);
// }

echo "Votre nom est : " . htmlspecialchars($_SESSION["nom"]) . "<br>";
echo " Votre email est : " . htmlspecialchars($_SESSION["email"]) . "<br>";
if (isset($_COOKIE['last_visit'])) {
    echo "Dernier visite : " . $_COOKIE['last_visit'];
}
?>
<!DOCTYPE html>
<html>

<body>
    <form method="POST">

        <button type="submit" name="logout">Deconnexion</button>

    </form>
</body>

</html>
<?php
if (isset($_POST["logout"])) {
    session_destroy();
    // echo "yoyo";
    header("Location: index.php");
    exit;
}
?>