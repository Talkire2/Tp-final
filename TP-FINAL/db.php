<?php
$server = "localhost";
$user = "root";
$pass = "root";
$database = "tp_soutenance";

$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die("Erreur");
}

   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS

?>