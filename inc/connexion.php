<?php
function dbConnexion()
{
    
    //$host="mysql51-36.perso";
    $host="tucherchesquoi.mysql.db";
    $user="tucherchesquoi";
    $password="emiliecc1";
    $database="tucherchesquoi";
    $dbh = null;

    try
    {
        $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    }
    catch(PDOException $e)
    {
       echo $e->getMessage();
    }

    //On établit la connexion
    $conn = mysqli_connect($host, $user, $password);

    //On vérifie la connexion
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    return $dbh;
}