<?php

include'ini.php';
$requete = $bdd->prepare("SELECT * FROM livres");
$livres = $requete->fetchAll();
foreach ($livres as $livre)
{
    echo '<a href="info.php?id='.$livre['id'].'">'.$livre['title']."</a><br>";
}
?>
   