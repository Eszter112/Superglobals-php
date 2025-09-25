<?php

// URL test : http://localhost/superglobals_php/exo1_get_server/demo.php?nom=Pedri&age=22



echo "<h3>Contenu de \$_GET</h3>";

print_r($_GET);
//$_GET lit les paramètres passés dans l’URL.
//$_GET est un tableau associatif qui contient les données envoyées via l’URL en méthode GET.
// Chaque paramètre devient une clé dans ce tableau.

echo "<h3>Infos serveur</h3>";


//$_SERVER fournit des infos sur la requête et le serveur.
echo "Method : " . $_SERVER['REQUEST_METHOD'] . "<br>";  //'REQUEST_METHOD'  Méthode de requête utilisée pour accéder à la page ; par exemple GET, HEAD, POST, PUT.





echo "Script : " . $_SERVER['PHP_SELF'] . "<br>"; // 'PHP_SELF' Le nom du fichier du script en cours d'exécution, par rapport à la racine web


echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>"; //'REMOTE_ADDR' L'adresse IP du client qui demande la page courante.
