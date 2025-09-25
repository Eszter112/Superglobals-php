<?php
// Afficher un lien vers inscription.php?event=phpday.
// Si le paramètre event existe → afficher « Vous allez vous inscrire à [event] ».

// Url : http://localhost/superglobals_php/mini_projet_inscription/index.php?event=phpday


echo "<a href='inscription.php?event=phpday'>Inscription PHP Day</a>" . "<br>" . "<br>";


if (isset($_GET['event'])) {

    $event = htmlspecialchars($_GET['event']);

    echo "« Vous allez vous inscrire à $event »";
}
