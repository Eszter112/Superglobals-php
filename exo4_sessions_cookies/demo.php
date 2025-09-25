<!-- Exo 4 — Sessions et Cookies
• Session = stockage côté serveur.
• Cookie = stockage côté navigateur. -->

<?php
session_start();
//permet de commencer une session ou de continuer une session existante
// avec session_start() on peut conserver les infos entre differentes pages ex:nom,statut de connexion, ou ses preferances
//toujours en debut de script?avant HTML ou echo, un seule fois par requete
//les donnees sont stockees cote serveur, pas dans navigateur ; seul l'identifiant de session est envoye au client



//on peut stocker des donnees dans $_SESSION[]
// isset() <=verifier ,si une variable existe et n'est pas null 

if (!isset($_SESSION['user'])) { //si la variable user n'existe pas encore dans la session , 
    $_SESSION['user'] = "Pedri";   //on la cree avec la valeur "Pedri"
}


// setcookie() <= permet de creer un cookie sur l'ordi de l'user 
// cookie <= petit information  ( comme last visit ou date) , la navigateur garde un memoire pour un site web 
// setcookie (nom:"last_visit"   ,  date j/m/A H:i=>15:33  ,   time()+3600  <= cookie expire dans 1 heure)
setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);



echo "Bonjour " . $_SESSION['user'] . "<br>";

if (isset($_COOKIE['last_visit'])) {   //verifier si la cookie est  existe
    echo "Dernier visite : " . $_COOKIE['last_visit'];   //on affiche sa valeur 
}
