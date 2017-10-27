<?php

$dsn ='tuanvcuu_livres;host:ftp-tuanvcuu.alwaysdata.net';
$user = 'tuanvcuu';
$pass = '123321';
try {
    $bdd = new PDO ($dsn,$user,$pass);
}
catch(Exception $e)
{
  echo $e->getMessage();  
}

// guillaume@lelasseur.fr
?>