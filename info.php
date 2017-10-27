<div class="content">
<?php
include'ini.php';
$requete = $bdd->query("SELECT * FROM livres where id=".$_GET['id']);
$infors = $requete->fetch();
echo"This book is ".$infors['title']."<br>";
echo "This book was writen by ".$infors['author']."<br>";
echo "This book was review at ".$infors['note']."/5 point";
?>
</div>
<style type="text/css">
    .content{
        text-align: center;
        font-size: 20px;
    }
</style>