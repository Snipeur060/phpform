<?php
// Informations d'identification
define('DB_SERVER', 'ip/localhost');
define('DB_USERNAME', 'username db (root some times)');
define('DB_PASSWORD', '');
define('DB_NAME', '(the name of the db )');
 
// Connexion à la base de données MySQL 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($con === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
// impor
date_default_timezone_set('Europe/Paris');
$error="";
?>
