<?php
include'ini.php';

if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['editor']) && !empty($_POST['note']));
{
    $requete= $bdd->prepare("INSERT INTO livres(title,author,editor,note) VALUES(?,?,?,?)");
    $requete->execute([$_POST['title'],$_POST['author'],$_POST['editor'],$_POST['note']]);
}


?>
<style type="text/css">
    a{
        text-align: center;
        font-size: 25px;
    }
</style>
<a href="index.php">Look again your Books</a>