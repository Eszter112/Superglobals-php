<?php
// test Url: http://localhost/superglobals_php/exo1_get_server/exercice.php?ville=Montpellier&pays=France




// • Afficher les paramètres ville et pays de l’URL.
print_r($_GET);


// • Afficher la méthode HTTP et le nom du script.

echo "Method : " . $_SERVER['REQUEST_METHOD'] . "<br>";

echo "Script :" . $_SERVER['PHP_SELF'];
