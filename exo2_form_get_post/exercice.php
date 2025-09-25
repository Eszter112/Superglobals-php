<!-- Exercice (exercice.php)
• Créer un formulaire avec nom et email.
• Version GET + version POST.
• Afficher les valeurs. Comparer les différences. -->


<form method="get">
    Nom: <input type="text" name="nom">


    Email <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>

<br>

<form method="post">
    Nom: <input type="text" name="nom">


    Email <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>



<?php
if (!empty($_GET['nom']) && !empty($_GET['email'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']) . " , ton email est : " . htmlspecialchars($_GET['email']) . "\n\n";
}
echo "\n";
if (!empty($_POST['nom']) && !empty($_POST['email'])) {
    echo "\n" . "Bonjour " . htmlspecialchars($_POST['nom']) . " , ton email est : " . htmlspecialchars($_POST['email']);
}
