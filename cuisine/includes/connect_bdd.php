<?php

$host ='localhost';
$dbname ='ateliers_cuisine';
$username ='root';
$password ='';

try{
    $bdd = New PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
         die('Erreur : '.$e->getMessage());

    }
?>