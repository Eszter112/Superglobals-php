<?php

// URL test : http://localhost/demo.php?nom=Pedri&age=22
echo "<p>URL test : http://localhost/demo.php?nom=Pedri&age=22</p>";


echo "<h3>Contenu de \$_GET</h3>"; //$_GET lit les paramètres passés dans l’URL.

print_r($_GET);

echo "<h3>Infos serveur</h3>";
echo "Method : " . $_SERVER['REQUEST_METHOD'] . "<br>"; //$_SERVER fournit des infos sur la requête et le serveur.

echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";
