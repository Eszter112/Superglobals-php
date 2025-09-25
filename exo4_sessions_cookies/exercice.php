<!-- // login.php → formulaire username, sauvegarde en session.
// • profil.php → affiche « Bonjour [username] » + dernière visite via cookie. -->


<form method="post">

    Username: <input type="text" name="username">
    <button type="submit">Login</button>

</form>



<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];


    if (empty($username)) {
        echo "Erreur : nom vide";
    } else {
        $_SESSION["username"] = $username;
        setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
        echo "Bonjour " . $_SESSION['username'] . "<br>";
    }
}





if (isset($_COOKIE['last_visit'])) {
    echo "Dernier visite : " . $_COOKIE['last_visit'];
}


?>